<?php
 
function print_ln($str){
    echo $str, "<br>";
}
$opis = "Pierwsza linia\n Druga linia\n Trzecia linia";
 
print_ln(nl2br($opis));
 
echo "<br>";
$tekst = "Programowanie aplikacji internetowych to przedmiot zawodowy w technikum";
 
print_ln(wordwrap($tekst, 10, "<br>", true));
 
echo "<br>";
print_ln(wordwrap("tetrahydroksoglinan sodu", 10, "<br>",true));
 
echo "<br>";
echo sprintf("nazwa uzytkownika: %s. Wiek uzytkownika %d.","user1",15), "<br>";
 
 
$zm = sprintf("nazwa uzytkownika: %s. Wiek uzytkownika %.2f. %%","user1",15.5);
echo "<br>";
 
printf("Rabat dla klienta %s wysosi %d%%", "a.nowak", 5);
 
print_ln("<hr>");
 
print_ln(str_pad("7",3, "0", STR_PAD_LEFT));
print_ln(str_pad("17",3, "0", STR_PAD_LEFT));
print_ln(str_pad("125",3, "0", STR_PAD_LEFT));
 
$numer = 123456789.987654;
print_ln(number_format($numer, 2, ",", " "));
 
print_ln("<hr>");
 
print_ln(strtoupper("Programowanie w PHP"));
print_ln(strtolower("Programowanie w PHP"));
 

$imie = "jan";
$nazwisko = "nowak-kowalski";
$pelne_imie = $imie." ".$nazwisko;

print_ln(ucwords($pelne_imie, " -"));



$login_wpisany = "     JaN.KOWalsKIi     ";
$login_db = "jan.kowalski";

if (trim(strtolower($login_wpisany))===$login_db){
	print_ln("Login Poprawny!");
}
else{
	print_ln("Brak dostępu!");
}

$polski_tekst = "żÓŁta GĘś";
print_ln(mb_strtoupper($polski_tekst));

$imie = "łukasz";
print_ln(mb_convert_case($imie,MB_CASE_TITLE));