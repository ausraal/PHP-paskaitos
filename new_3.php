<?php
// ($a = 1; $a < 21; $a++) {
//    switch ($a) {
//        case $a % 3 == 0 && $a % 5 == 0:
//            echo 'HeyHo ';
//            break;
//        case $a % 3 == 0:
//            echo 'Hey ';
//            break;
//        case $a % 5 == 0:
//            echo 'Ho ';
//            break;
//        default:
//            echo $a . ' ';
//            break;
//    }
//}
/*10. Iteruokite sveikus skaičius nuo -5 iki 5.
Išspausdinkite skaičių dvejopai:
1. Pasinaudojant paprastu echo
2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę*/
for ($i = -5; $i <=5; $i++){
    echo $i.PHP_EOL;
    var_dump((bool)$i);
}
