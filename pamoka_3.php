<?php
/*1. Apskaičiuokite PHP pagalba ir išveskite į terminalą. Kiekvienas rezultatas turi būti naujoje eilutėje:
987 + 545 - 32 * 94
32 pakelkite laipsniu 3 ir pridėkite 18
120 padalinkite iš 4 ir dar karta padalinkite iš 3
kokia liekana lieka po skaičiaus 187 dalybos iš 5
skaičiui 3 tris kartus pritaikykite increment operatorių - koki skaičių gaunate?
    skaičiui 12 keturis kartus pritaikykite decrement operatorių - koki skaičių gaunate?
*/
//echo (987 + 545 - 32 * 94) .PHP_EOL;
//echo (32**3 + 1).PHP_EOL;
//echo((9120/4)/3).PHP_EOL;
//echo(187%5).PHP_EOL;
//$numA = 3;
//$numA ++;
//$numA ++;
//$numA ++;
//echo($numA);
/*
2. Išspausdinkite skaičius nuo 1 iki 10 naudodamiesi ciklu. Panaudokite visus 4 būdus ciklams aprašyti.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/
//for ($i = 1; $i<11; $i++){
//    echo $i.PHP_EOL;
//}
/*3. Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/
//for ($i = 15; $i>2; $i--){
//    echo $i.PHP_EOL;
//}
/*4. Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.*/
//for ($i = 1; $i<21; $i+=2){
//   echo $i.PHP_EOL;
//}
/*5. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.*/
//$x = 1;
//while ($x < 21) {
//    if($x % 3 == 0) {
//        echo $x;
//        echo PHP_EOL;
//
//    }
//    $x++;
//}
/*
6. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3 arba iš 5.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/
//$y = 1;
//while ($y < 21) {
//    if($y % 3 == 0 || $y %5 ==0 ) {
//        echo $y;
//        echo PHP_EOL;
//    }
//    $y++;
//}
/*
7. Iteruokite per skaičius, nuo 1 iki 20.
Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
Kitu atveju išspausdinkite skaičių.
Viskas turi būti atspausdinti vienoje eilutėje su tarpais:
1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
*/
//for ($a = 1; $a < 21; $a++){
//   switch ($a) {
//       case $a % 3 == 0:
//           echo 'Hey ';
//           break;
//       case $a % 5 ==0:
//       echo 'Ho ';
//           break;
//       case $a % 3 == 0 && $a % 5 ==0:
//           echo 'HeyHo ';
//           break;
//       default:
//           echo $a.' ';
//           break;
//   }
//}
/*
8. Raskite sveikų skaičių nuo 1 iki 100 sumą.
//*/
//$sum = 0;
//for ($i = 1; $i <= 100; $i++) {
//    $sum += $i;
//   }
//echo $sum.PHP_EOL;
/*9. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
monday-tuesday-wednesday-thursday-friday-saturday-sunday-
*/
$days = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday',
];
foreach ($days as $day) {
    echo $day.'-';
}