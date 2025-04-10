<style>
	div#lista
	{
		float : left  ;
		width : 240px ;
	}

  div#foldresz
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
 
    print"<div id='foldresz'>";
      print"<a href='?kontinens=europa' name='europa'>EURÓPA</a><br>";
      print"<a href='?kontinens=azsia' name='azsia'>ÁZSIA</a><br>";
      print"<a href='?kontinens=amerika' name='amerika'>AMERIKA</a><br>";
      print"<a href='?kontinens=afrika' name='afrika'>AFRIKA</a><br>";
      print"<a href='?kontinens=ausztralia' name='ausztralia'>AUSZTRÁLIA</a><br>";
      print"<a href='?kontinens=oceania' name='oceania'>ÓCEÁNIA</a><br><br><br>";
    print"</div>";

    print "<div id='lista'>" ;
      $kontinens = $_GET['kontinens'];
      while( $sor = mysqli_fetch_array( $tabla ))
      {
        print "<a href='$kontinens'></a>";
      }
    print "</div>" ;


    /*
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
	  print "Válassz országot!" ;
  }*/

    mysqli_close( $adb ) ;
?>