<?php
// $owoce = ["jabłko", "gruszka", "banan"];

// echo $owoce[0];

// $owoce[] = "pomarańcza";

// var_dump($owoce);

// $uczen = [
//     "imie" => "Jan",
//     "nazwisko" => "Kowalski",
//     "ocena" => [
//         "polski" => [4,5,4],
//         "angielski" => [1,2,5]
//     ]
// ];

// echo $uczen["nazwisko"];

// echo count($uczen);

// var_dump($uczen["ocena"]["polski"]);

declare(strict_types=1);

$liczby = [1,2,3,4,5,6,7,8,9];

function suma($f) : int{
    $suma = 0;
    foreach ($f as $liczba){
        $suma += $liczba;
    }
    return $suma;
}

//echo suma([4,5,6,7,8,9]);

function srednia($tab) : float{
    $suma = suma($tab);
    $ilosc = count($tab);
    return $suma/$ilosc;
}

echo suma($liczby);
echo "<br>";
echo srednia($liczby);

