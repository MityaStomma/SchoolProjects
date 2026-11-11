<?php
$pesel = "72073092344";
function oblicz_data_z_pedel(string $pesel){
//    echo substr($pesel, 0, 6);
    $rok = (int)substr($pesel,0,2);
    $miesiac = (int)substr($pesel,2,2);
    $dzien = (int)substr($pesel,4,2);

    switch ($miesiac) {
        case $miesiac >= 21 && $miesiac <= 32:
            $miesiac = $miesiac - 20;
            $rok += 2000;
            break;
        case $miesiac >= 41 && $miesiac <= 52:
            $miesiac = $miesiac - 40;
            $rok += 2100;
            break;
        case $miesiac >= 61 && $miesiac <= 72:
            $miesiac = $miesiac - 60;
            $rok += 2200;
            break;
        case $miesiac >= 81 && $miesiac <= 92:
            $miesiac = $miesiac - 80;
            $rok += 1800;
            break;
        default:
        $rok += 1900;
        break;
    }

    $data =[
        "dzien" => $dzien,
        "miesiac" => $miesiac,
        "rok" => $rok
    ];

    return $data;

}

function CzyPoprawnaDlugosc(string $pesel){
    if(strlen($pesel) != 11){
        return false;
    }
    return true;
}

function CzyWszyscyCyfry(string $pesel){
    $znaki = str_split($pesel);
    foreach($znaki as $znak){
         if ($znak < '0' || $znak > '9') {
            return false;
        }
    }
    return true;
};

function CzyPoprawnyPesel(string $pesel){
    $wagi[] = [1,3,7,9,1,3,7,9,1,3];
    $suma = 0;
    for ($i = 0; $i < 10; $i++) {
            (int)$suma += (int)$pesel[$i] * (int)$wagi[$i];
    }
    $wyliczonaCyfraKontrolna = (10 - ($suma % 10)) % 10;
    $cyfraKontrolna = $pesel[10];
    return $wyliczonaCyfraKontrolna == $cyfraKontrolna;
}

function tablica_do_data(array $data){
    $miesiace = [1 => 'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'wrześcia', 'pażdziernika', 'listopada','grudnia'];
    return $data['dzien'].". ".$miesiace[$data['miesiac']].".".$data['rok']."r";
}

if (!CzyPoprawnaDlugosc($pesel)){
    echo "Błędna dlugosc PESEL";
}
elseif (!CzyWszyscyCyfry($pesel)){
            echo "PESEL może zawierać tylko cyfry";
}
elseif (!CzyPoprawnyPesel($pesel)){
    echo "idi nahui";
}
else {
    echo tablica_do_data(oblicz_data_z_pedel($pesel));
}


