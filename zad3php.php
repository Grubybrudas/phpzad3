<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br>";

for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}

echo "<br>";

$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}

echo $suma . "<br>";

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}

echo "<br>";

$x = 12;
$y = 100;
$kwota = 0;

for ($i = 1; $i <= $x; $i++) {
    $kwota += $y;
    $kwota *= 1.08;
}

echo "Zgromadzona kwota: " . $kwota . " zł<br>";

$a = 5;
$d = 10;
$n = 100;
$ostatni = $a + ($n - 1) * $d;
$suma = $n * ($a + $ostatni) / 2;

echo "Suma ciągu: " . $suma . "<br>";

$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    $suma += $i * $i;
}

echo "Liczba cegieł: " . $suma . "<br>";

$x = 20;
$y = 5;
$z = 2;

$suma = 0;
$rząd = $x;

for ($i = 1; $i <= $y; $i++) {
    $suma += $rząd;
    $rząd -= $z;
}

echo "Liczba cegieł w ścianie: " . $suma . "<br>";

$k = 2;

$waga = $suma * $k;

echo "Waga ściany: " . $waga . " kg<br>";

$a = 20;
$b = 5;
$dzialanie = "/";

if ($dzialanie == "+") {
    echo "Wynik: " . ($a + $b) . "<br>";
} elseif ($dzialanie == "-") {
    echo "Wynik: " . ($a - $b) . "<br>";
} elseif ($dzialanie == "*") {
    echo "Wynik: " . ($a * $b) . "<br>";
} elseif ($dzialanie == "/") {
    if ($b == 0) {
        echo "Nie można dzielić przez zero.<br>";
    } else {
        echo "Wynik: " . ($a / $b) . "<br>";
    }
} else {
    echo "Nieprawidłowe działanie.<br>";
}

$n = 10;
$x = 2;
$y = 3;

for ($i = 0; $i < $n; $i++) {
    echo ($x + $i * $y) . " ";
}

echo "<br>";

do {
    $a = rand(-10, 10);
    $b = rand(-10, 10);
    $suma = $a + $b;

    echo $a . " + " . $b . " = " . $suma . "<br>";

} while ($suma != 0);

$n = 5;
$silnia = 1;

for ($i = 1; $i <= $n; $i++) {
    $silnia *= $i;
}

echo "Silnia: " . $silnia . "<br>";

$n = 6;
$x = 2;

for ($i = 1; $i <= $n; $i++) {
    echo $x . " ";
    $x = $x * $x;
}

echo "<br>";

$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    $liczba = rand(50, 100);
    echo $liczba . " ";
    $suma += $liczba;
}

$srednia = $suma / 10;

echo "<br>";
echo "Suma: " . $suma . "<br>";
echo "Średnia: " . $srednia;

?>

</body>
</html>
