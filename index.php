<?php

$numbersA = [1, 2, 3, 4, 5, 6];
$numbersB = [1.1 , 1.2, 1.3, 1.4, 1.5, 1.6];
$numbersC = [];

for ($i=0; $i < count($numbersA); $i++) { 
    $tempt = [$numbersA[$i], $numbersB[$i]];
    array_push($numbersC, $tempt);    
}

print_r($numbersC);

echo ('code add');