using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace JanosVitez
{
    class Program
    {

        static void Main(string[] args)
        {
            feladatok();
            Console.ReadKey();
        }

        static void feladatok()
        {
            StreamReader olvasocsatorna = new StreamReader(@"Z:\prigi\janosVitez\JanosVitez.txt");
            string[] szavak = olvasocsatorna.ReadLine().Split(' ');
            olvasocsatorna.Close();


            //1.feladat
            Console.WriteLine("1. feladat- Hány szóbol áll a vers részlet? ");

            Console.WriteLine($"1.feladat: A vers részlet ennyi szót tartalmaz: {szavak.Length}");
            Console.WriteLine();

            //2.feladat: Mennyi betű a leghosszabb szó?
            Console.WriteLine("2.feladat - Hány betüből áll a leghosszabb szó?");




            Console.WriteLine("2.feladat: A legtöbb betüből álló szó: ");
            Console.WriteLine();

            //3.feladat: Hányszor szerepel az "a" nevelő
            Console.WriteLine("3.feladat - Hányszor szerepel az (a) nevelő?");
            int szam_a = 0;

            for (int i = 0; i < szavak.Length; i++)
            {
                if (szavak[i] == "a")
                {
                    szam_a++;
                }

            }
            Console.WriteLine($"3.feladat: A versben {szam_a}-szor/ször szerepel.");
            Console.WriteLine();

            //4.feladat: Hány nevelő van benne?
            Console.WriteLine("4.feladat - Hány nevelő szerepel?");
            int nevelokSzama = 0;

            for (int i = 0; i < szavak.Length; i++)
            {
                if (szavak[i] == "a" || szavak[i] == "az")
                {
                    nevelokSzama++;
                }
            }
            Console.WriteLine("4.feladat: Ennyi nevelő szerepel a versben: " + nevelokSzama);
            Console.WriteLine();

            //5.Melyik a 10. szó
            Console.WriteLine("5.feladat - Melyik a tizedik szó?");
            string tizedikszo = szavak[9];
            Console.WriteLine();
            Console.WriteLine("5.feladat: A tizedik szó a versben: " + tizedikszo);
        }
    }
}