<?php
$wyniki = [
    ["zawodnik" => "Kowalczyk",  "kraj" => "POL", "czas" => 24.81],
    ["zawodnik" => "Schmidt",    "kraj" => "GER", "czas" => 24.35],
    ["zawodnik" => "Novák",      "kraj" => "CZE", "czas" => 25.02],
    ["zawodnik" => "Wiśniewska", "kraj" => "POL", "czas" => 24.58],
    ["zawodnik" => "Müller",     "kraj" => "GER", "czas" => 25.40],
    ["zawodnik" => "Horváth",    "kraj" => "HUN", "czas" => 24.47],
    ["zawodnik" => "Zielińska",  "kraj" => "POL", "czas" => 25.10],
    ["zawodnik" => "Svoboda",    "kraj" => "CZE", "czas" => 24.93],
];
$wybranyKraj = "POL";
$Kraj_zawodnik = [];

//sortowanie
usort($wyniki, function($a, $b){
    return $a['czas'] <=> $b['czas'];
});

//oblicza najlepszy czas
$max_czas = $wyniki[0]['czas'];

echo "<h1>Zawody pływackie – 50 m</h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Miejsce</th>
            <th>Zawodnik</th>
            <th>Kraj</th>
            <th>Czas [s]</th>
            <th>Strata</th>
        </tr>
        <?php 
        foreach($wyniki as $row){
            //dodawanie dopisku
        if($miejsce == 1) $dopisek = " złoto";
        if($miejsce == 2) $dopisek = " srebro";
        if($miejsce == 3) $dopisek = " bronz";
        if($miejsce > 3) $dopisek = " ";
        echo "<tr>";
        //wypisuje miejsce i zawodnika
        echo "<td>".$miejsce.$dopisek."</td>";
        echo "<td>".$row['zawodnik']."</td>";


        //obliczanie straty
        if($miejsce == 1) {
            $strata = " -- ";
        }
        else {
            $roznica = $row['czas'] - $max_czas;
            $strata = "+".number_format($roznica, 2,',' ,' ');
        }


        if ($row['kraj'] == $wybranyKraj){
            $Kraj_zawodnik[] = $row['zawodnik']. " zajęte miejsce: ".$miejsce;
        }


        //wypisuje kraj, czas, stratę
        echo "<td>".$row['kraj']."</td>";
        echo "<td>".$row['czas']."</td>";
        echo "<td>".$strata."</td>";
        $miejsce++;
        
        }


        ?>
    </table>

        <?php

        //wypisuje liczbę zawodników, średni czas i liczbę krajów
        echo "liczba zawodników: ".count($wyniki);
        echo "<br>";
        echo "średni czas: ".round(array_sum(array_column($wyniki, 'czas'))/count($wyniki),2);
        $kraje = array_unique(array_column($wyniki, 'kraj'));
        $liczba_krajow = count($kraje);
        echo "<br>";
        echo "Liczba krajów biorących udział: ".$liczba_krajow;

        //wypisuje tablice "$kraj_zawodnik"
        echo "<h2>Reprezentacja ".htmlspecialchars($wybranyKraj)."</h2>";
        
        if(!empty($Kraj_zawodnik)){
            foreach($Kraj_zawodnik as $k){
                echo htmlspecialchars($k);
                echo "<br>";
            }
        } else {
            echo "Brak zawodników danego kraju";
        }

        ?>
</body>
</html>