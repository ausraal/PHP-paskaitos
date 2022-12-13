<?php

// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/
//function dividesBy5 (int $num): int
//{
//    return $num % 5;
//}
//var_dump(dividesBy5(550));
//2.
function arrayPrinter (array $arr) {
    foreach ($arr as $items) {
       echo "'" . $items . "'" . PHP_EOL;
    }
}
 arrayPrinter(['some text', 'another text']);
echo (arrayPrinter(['some text', 'another text']));

//3
function stringEnhancer(string $text, string $text2 = '**'): string {
    return $text2 . $text . $text2;
}
echo(stringEnhancer('some text', '##')) . PHP_EOL;
echo(stringEnhancer('some text')). PHP_EOL;

//4.
function stringModifier (string &$x, string $b): void
{ //reikia prie kintamojo prideti & kad kintamaji butu galima ir paduoti, ir pamodifikuoti tiesiogiai

      $x = $b . $x . $b;
 //    echo $b . $x . $b;
}
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'
echo PHP_EOL;
//5.Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą..

function textReplicator(string $text, ?int $num): void {
    for ($i = 0; $i < $num; $i++) {
        echo $text;
        echo "-";

}

}
textReplicator('some_text', 3);
textReplicator('some_text', null);
