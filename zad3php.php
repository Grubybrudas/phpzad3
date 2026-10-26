<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania PHP</title>
</head>
<body>

<?php

$X = 5;   
$Z = 1;   
$K = 3;   
$N = 8;   


echo "1. 10 kolejnych liczb całkowitych od 1:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<br>2. 10 kolejnych liczb całkowitych od 10 malejąco:<br>";
for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}

echo "<br>3. Suma 10 kolejnych liczb całkowitych od 1:<br>";
$suma1 = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma1 += $i;
}
echo "Suma: " . $suma1 . "<br>";

echo "<br>4. 10 kolejnych parzystych liczb od 2:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo ($i * 2) . "<br>";
}

echo "<br>5. Oszczędności pracownika (X miesięcy, Y zł, 8% odsetek co miesiąc):<br>";
$zgromadzona_kwota = 0;
$miesiace = 0;
while ($miesiace < $X) {
    $zgromadzona_kwota += $Y;
    $zgromadzona_kwota += $zgromadzona_kwota * 0.08;
    $miesiace++;
}
echo "Zgromadzona kwota po " . $X . " miesiącach: " . $zgromadzona_kwota . " zł<br>";

echo "<br>6. Suma ciągu arytmetycznego (100 elementów, start=5, różnica=10):<br>";
$suma_ciagu = 0;
$aktualny_element = 5;
for ($i = 0; $i < 100; $i++) {
    $suma_ciagu += $aktualny_element;
    $aktualny_element += 10;
}
echo "Suma: " . $suma_ciagu . "<br>";

echo "<br>7. Ilość cegieł w piramidzie o podstawie 10 x 10:<br>";
$cegly_piramida = 0;
for ($bok = 10; $bok >= 1; $bok--) {
    $cegly_piramida += ($bok * $bok);
}
echo "Suma cegieł: " . $cegly_piramida . "<br>";

echo "<br>8. Ilość cegieł w ścianie (podstawa X, wysokość Y, zmniejszanie o Z):<br>";
$cegly_sciana = 0;
$aktualny_rzad_szerokosc = $X;
for ($r = 0; $r < $Y; $r++) {
    if ($aktualny_rzad_szerokosc <= 0) {
        break; 
    }
    $cegly_sciana += $aktualny_rzad_szerokosc;
    $aktualny_rzad_szerokosc -= $Z;
}
echo "Ilość cegieł: " . $cegly_sciana . "<br>";

echo "<br>9. Waga ściany z podpunktu 8 (jedna cegła = K kg):<br>";
$waga_sciany = $cegly_sciana * $K;
echo "Waga ściany: " . $waga_sciany . " kg<br>";

echo "<br>10. Symulator prostego kalkulatora (Przykładowe działanie: 12 * 4):<br>";
$a = 12;
$b = 4;
$operator = '*'; 
$wynik_kalkulatora = 0;
if ($operator == '+') $wynik_kalkulatora = $a + $b;
elseif ($operator == '-') $wynik_kalkulatora = $a - $b;
elseif ($operator == '*') $wynik_kalkulatora = $a * $b;
elseif ($operator == '/') {
    if ($b != 0) $wynik_kalkulatora = $a / $b;
    else $wynik_kalkulatora = "Błąd: Dzielenie przez zero";
}
echo "Wynik " . $a . " " . $operator . " " . $b . " = " . $wynik_kalkulatora . "<br>";

echo "<br>11. Ciąg arytmetyczny N elementów (start X, różnica Y):<br>";
$element_c = $X;
for ($i = 0; $i < $N; $i++) {
    echo $element_c . "<br>";
    $element_c += $Y;
}

echo "<br>12. Pętla sumująca dwie liczby, aż suma wyniesie 0 (Symulacja tablicy wejściowej):<br>";

$pary_liczb = [
    [5, -3],
    [10, -10], 
    [4, 4]     
];
$indeks = 0;
do {
    $l1 = $pary_liczb[$indeks][0];
    $l2 = $pary_liczb[$indeks][1];
    $suma_par = $l1 + $l2;
    echo "Pobrane liczby: " . $l1 . " i " . $l2 . ". Suma = " . $suma_par . "<br>";
    $indeks++;
} while ($suma_par != 0 && $indeks < count($pary_liczb));

echo "<br>13. Silnia z wprowadzonej liczby X:<br>";
$silnia = 1;
$licznik_silnia = 1;
while ($licznik_silnia <= $X) {
    $silnia *= $licznik_silnia;
    $licznik_silnia++;
}
echo "Silnia z " . $X . " wynosi: " . $silnia . "<br>";

echo "<br>14. Ciąg N liczb, gdzie każda kolejna jest kwadratem poprzedniej (start X):<br>";
$liczba_kwadrat = $X;
for ($i = 0; $i < $N; $i++) {
    echo $liczba_kwadrat . "<br>";
    $liczba_kwadrat = $liczba_kwadrat * $liczba_kwadrat;
}

echo "<br>15. Suma oraz średnia z 10 losowych liczb z przedziału &lt;50,100&gt;:<br>";
$suma_losowych = 0;
for ($i = 0; $i < 10; $i++) {
    $losowa = rand(50, 100);
    $suma_losowych += $losowa;
}
$srednia_losowych = $suma_losowych / 10;
echo "Suma: " . $suma_losowych . "<br>";
echo "Średnia: " . $srednia_losowych . "<br>";

?>

</body>
</html>
