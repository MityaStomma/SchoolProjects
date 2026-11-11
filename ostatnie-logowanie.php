<?php 
const MINUTA = 60;
const GODZINA = 60 * MINUTA;
const DZIEN = 24 * GODZINA;

$teraz = time();

echo "Dzisiaj: ".date("d.m.Y H:i", $teraz)."<br>";
echo "Data za tydzień: ".date("d.m.Y H:i", $teraz + DZIEN * 7)."<br>";
echo "Data wczoraj: ".date("d.m.Y H:i", $teraz - DZIEN)."<br>";
echo "Za 1.5h: ".date("d.m.Y H:i", $teraz + 90 * MINUTA)."<br>";

echo "<hr>";

$ostatnieLogowanie = $teraz - 200000;
$roznica = $teraz - $ostatnieLogowanie;

$dni = intdiv($roznica,DZIEN);
$godziny = intdiv($roznica % DZIEN, GODZINA);
$minuty = intdiv($roznica % GODZINA,MINUTA);
$sekundy = $roznica % MINUTA;



echo "ostatnie logowanie: $dni dni, $godziny godzin, $minuty minut, $sekundy sekund temu";
echo "<hr>";
$start = microtime(true);
$suma  = 0;
for($i = 0; $i < 1000000; $i++){
    $suma += $i;
}

$czas = time() - $start;

echo "Czas trwania: " . $czas;
