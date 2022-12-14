<?php
declare(strict_types=1);

function exercise1(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [0, 1, 2, 3, 4];

    return $numbers[3];
}
var_dump(exercise1());
function exercise2(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

    return $numbers['three'];
}
var_dump(exercise2());
function exercise3(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        [0, 1],
        [1, 0, 2],
        [
            0,
            [
                0, 1, 99
            ],
        ],
    ];

    return ($numbers[2][1][2]);
}
var_dump(exercise3());

function exercise4(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_2' => [
                'zero' => 0, 'one' => 1, 'ninetynine' => 99
            ],
        ],
    ];

    return ($numbers['fourth']['value_2']['ninetynine']);
}
var_dump(exercise4());
function exercise5(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                'zero' => 0, 'one' => 1, 99
            ],
        ],
    ];

    return $numbers['fourth']['value_6'][0];
}
var_dump(exercise5());

function exercise6(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                5 => 0, 'one' => 1, 99
            ],
        ],
    ];

    return $numbers['fourth']['value_6'][6];
}
var_dump(exercise6());
function exercise7(): array
{
    /*
    Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
    unset($numbers['two']);

    return $numbers;
}
var_dump(exercise7());

echo 'EXERCISE 8' . PHP_EOL;
function exercise8(): array
{
    /*
    Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'five' => 5]
    */

    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
foreach ($numbers as $key => $number) {
    if($number % 2 == 0) {
        unset($numbers[$key]);
    }
}

        return $numbers;
    }

var_dump(exercise8());

function exercise9(int $start, int $end): void
{
    /*
    Išspausdinkite skaičius nuo $start iki $end pasinaudodami ciklu.
    Jeigu $start yra mažiau nei $end, funkcija nieko nespausdina.
    */

if ($start > $end) {
    for ($i = $start; $i >= $end; $i--) {
        echo $i . PHP_EOL;
    }
} else {
    echo " ";
}
}
exercise9(10, 2);

echo 'EXERCISE 10' . PHP_EOL;
function exercise10(int $number): void
{
    /*
    Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 3. Jeigu paduotas skaičius mažesnis nei 0,
    funkcija nieko nespausdina.
    Funkcijos kvietimas: exercise10(60)
    Funkcija spausdina:
    3
    6
    9
    12
    ...
    60
    */
    for ($i = 0; $i < $number; $i++) {
        if ($i >0 && $i %3 ===0 )
            echo $i . PHP_EOL;
    }

}
exercise10(18);
echo 'EXERCISE 11' . PHP_EOL;

function exercise11(int $number): void
{
    /*
    Išspausdinkite skaičius nuo $number iki 0 pasinaudodami ciklu. Jeigu paduotas skaičius neigiamas,
    funkcija nieko nespausdina.
    Funkcijos kvietimas: exercise11(21)
    Funkcija spausdina:
    21
    20
    19
    ...
    1
    0
    */
    if ($number> 0) {
        for ($i = $number; $i >= 0; $i--) {

            echo $i . PHP_EOL;
        }
    }
}
exercise11(21);

echo 'EXERCISE 12' . PHP_EOL;
function getNumbers(): array
{
    return [
        99,
        15,
        28,
        13,
        145,
        99,
        12,
        -57,
        -36,
    ];

    }
    function exercise12(): int {
    $array = getNumbers();
//    $sum = 0;
//    foreach ($array as $item) {
//        $sum = $sum + $item;
//    }
    return (array_sum($array));
}
var_dump(exercise12());

echo 'EXERCISE 13' . PHP_EOL;

function exercise13(): int {
    $array = getNumbers();
    $sum = 0;
    foreach ($array as $item) {
        if ($item % 2 == 0)
        $sum = $sum + $item;
    }
    return $sum;
}
var_dump(exercise13());

echo 'EXERCISE 14' . PHP_EOL;

function exercise14(): int {
    $array = getNumbers();
    $sum = 0;
    foreach ($array as $item) {
        if ($item > 0) {
            $sum = $sum + $item;
        }

    }
    return $sum;
}
var_dump(exercise14());

echo 'EXERCISE 15' . PHP_EOL;

function exercise15(): int {
    $array = getNumbers();
    $sum = 0;
    foreach ($array as $item) {
        if ($item % 5 == 0) {
            $sum = $sum + $item;
        }

    }
    return $sum;
}
var_dump(exercise15());

echo 'EXERCISE 16' . PHP_EOL;

function exercise16(): int {
    $array = getNumbers();
    $sum = 0;
    $x = count($array);
    foreach ($array as $item) {
        if ($item < 0) {
           $item = $item * -1;
        }
        $sum = $sum + $item;
    }
    return $sum / $x;
}
var_dump(exercise16());

echo 'EXERCISE 17' . PHP_EOL;

function exercise17(): array {
    $array = getNumbers();
    $array[] = 255;

    return $array;
}
print_r(exercise17());