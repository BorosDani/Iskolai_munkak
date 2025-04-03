<style>
	div#lista
	{
		float : left  ;
		width : 240px ;
	}

</style>

<?php

    $adb = mysqli_connect( "localhost", "root", "", "foldrajz" ) ;

    $tabla = mysqli_query( $adb , "
					SELECT * 
					FROM   orszagok 
					WHERE  foldr_hely LIKE '%Europa%'
    " ) ;
 
    print "<div id='lista'>" ;
    while( $sor = mysqli_fetch_array( $tabla ) )
    print "
		<a href='./?oid=$sor[id]'>$sor[orszag]</a><br>
    " ;
    print "</div>" ;


  if( isset($_GET['oid']) )
  {
    $tabla = mysqli_query( $adb , "
					SELECT * , nepesseg/terulet*1000 AS nepsuruseg
					FROM   orszagok 
					WHERE  id = '$_GET[oid]'
    " ) ;
 
    $sor = mysqli_fetch_array( $tabla ) ;

    $nepsuruseg = $sor['nepesseg'] / $sor['terulet'] * 1000 ;

    print "

	<div id='reszlet'>
		Ország : $sor[orszag]  <br>

		Főváros: $sor[fovaros] <br>

		Terület: $sor[terulet] km<sup>2</sup><br>

		Népesség: $sor[nepesseg] ezer fő <br>

		Népsűrűség (MySQL): $sor[nepsuruseg] fő/km<sup>2</sup> <br>

		Népsűrűség (PHP): $nepsuruseg fő/km<sup>2</sup> <br>

	</div>

    " ;
  }
  else
  {
	print "Válaasz országot!" ;
  }

    mysqli_close( $adb ) ;
?>