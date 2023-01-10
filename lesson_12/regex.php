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
    $pattern ='/^((\+370|8)6)(\d{7})$/';
    if (preg_match($pattern, $number)){
        return true;
    } else
    {
        return false;
    }

}
foreach ($numbers as $number) {
    var_dump(isNumLT($number));
}

/*3. Patobulinkite funkciją (2). Funkcija turėtų galėti patikrinti ir tokius telefono numerius:
"+370 623 45678"
"+370-623-45678"
"+370-623 45678"
"00370 623 45678"
Jeigu telefono numeris validus, iš funkcijos turėtų grįžti tvarkingai suformatuotas telefono numeris:
"+370-623 45678" --> "+37062345678"
*/
$newNumbers = [
    "+370 623 45678",
"+370-623-45678",
"+370-623 45678",
"00370 623 45678"
];
function isNumValid(string $newNumber): string {
    $pattern ='/^(\+|0{2})(370)( |\-)(6)(\d{2})( |\-)(\d{5})$/'; //tarpas tinka labiau siuo atveju, nes \s atitiktu ir taba-tarpa atitraukus nuo pacio krasto, siuo atveju jis per platus.
    $replacement = '+$2$4$5$7';
    if (preg_match($pattern, $newNumber)){
        return preg_replace($pattern, $replacement, $newNumber);
    } else {
        return $newNumber;
    }

}
//foreach ($newNumbers as $newNumber) {
//    var_dump(isNumValid($newNumber));
//}

echo 'EXERCISE 4' . PHP_EOL;
/*
 4. Parašykite funkciją, kuri užmaskuotų dalį vartotojo duomenų. Pavardės ir gimimo metų simboliai
turėtų būti pakeisti i simbolius 'X'.
"John Smith, 1979 05 15" --> "John XXXXX, XXXX 05 15"
 */
$stringNew = "John Smithsmith, 1979 05 15";
function hideCredentials(string $stringNew): string {
//    $matches = [];
    $pattern = '/^(\w+) (\w+), (\d{4}) (\d{2}) (\d{2})$/';
//    $matched = preg_match($pattern, $stringNew, $matches);
//    var_dump($matches);
    $hide = '$1 XXXX, XXXX $4 $5';
return preg_replace($pattern, $hide, $stringNew);
}
var_dump(hideCredentials($stringNew));

/*
 *5. Parašykite funkciją, kuri pravaliduotų IPv4 adresą. IPv4 adresas yra sudarytas iš 4 skaičių, kurių kiekvienas gali
būti nuo 0 iki 255. Skaičiai atskirti taškais.
Pvz.:
255.255.255.255
1.1.0.1
//preg_matches suskirstyti i grupes, grupes issikelti ir tikrinti ar ne daugiau nei 255.
 */
echo 'EXERCISE 5' . PHP_EOL;
$Ipv4 = '255.255.255.256';

function validateIpv4 (string $Ipv): bool
{
    $matches = [];
    preg_match('/^(\d{1,3}).(\d{1,3}).(\d{1,3}).(\d{1,3})$/', $Ipv, $matches);
    $results = array_slice($matches, 0);

    foreach ($results as $result) {
        if ((int)$result > 255)
            return false;
    }
    return true;
}

var_dump(validateIpv4('255.255.189.255'));