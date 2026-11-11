<?php
// $dni = ['Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];
// array_push($dni, 'Niedziela');
// for($i = 0; $i<count($dni); $i++) {
//     echo ($i + 1).".".$dni[$i]."<br>";
// }
// foreach($dni as $licznik => $dzien){
//     echo ($licznik + 1).".".$dzien."<br>";
// }

$oceny = [4, 5, 3, 6, 2, 5, 4, 3, 5];
echo implode(", ", $oceny);
echo "<br>";
echo count($oceny);
echo "<br>";
echo array_sum($oceny);
echo "<br>";
$srednia = array_sum($oceny)/count($oceny);
echo round($srednia, 2);
echo "<br>";
echo max($oceny);
echo "<br>";
echo min($oceny);
echo "<br>";
$dobre = 0;
foreach($oceny as $ocena){
    if($ocena>=4){
        $dobre ++;
    }
}
echo $dobre;