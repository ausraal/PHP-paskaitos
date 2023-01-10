<?php
declare(strict_types=1);
/*1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
"A car is standing in a parkinglot." --> "A car is standing in a"*/

$string = "A car is standing in a yard.";
function changeString(string $string):string
{
    $pattern = '/\s\w+\./';
    $changes = ' ';
    return preg_replace($pattern,$changes, $string);
}
//var_dump(changeString($string));

/*
2. Parašykite funkciją, kuri patikrintų, ar tekstas atitinka lietuviško mobilaus telefono numerio formatą
"+37062345678" - true
"+37012345678" - false
"+3706234567" - false
"+
3706234567a" - false
*/

$numbers = [
    "+37062345678",
    "+37012345678",
    "+3706234567",
    "+
3706234567a"
];
function isNumLT(string $number):bool {
    $pattern ='/^(\+3706)(\d{7})$/';
    if (preg_match($pattern, $number)){
        return true;
    } else {
        return false;
    }

}
foreach ($numbers as $number) {
    var_dump(isNumLT($number));
}
