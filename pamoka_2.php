<?php

// 1. Sukurkite konstantą WEBSITE_ADDRESS, reikšmėje nurodykite google.com adresą
//
//define ('WEBSITE_ADDRESS', 'www.google.com');
//echo WEBSITE_ADDRESS;

// 2. Palyginkite reikšmes 200 ir '200' taip, kad:
//   a) gautume true
//   b) gautume false
var_dump(200 == '200');
var_dump(200 === '200');
// 3. Patikrinkite ar galime sujungti du skaičius kaip string duomenis (string sujungimui naudojame taško simbolį)

$varOne = 1;
$varTwo = 2;
echo $varOne . $varTwo;
