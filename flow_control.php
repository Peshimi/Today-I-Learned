<?php 
# _-_-_ Instrukcje warunkowe i pętle _-_-_

#if sprawdza podany warunek, i w zależności od tego czy zwróci true czy false, wyświetli kod programu podany w bloku
$x = 5;
if ($x == 5) {
    echo "Zmienna równa się 5, wszystko działa jak należy";
}
echo "<br>";
$num = 9;
if ($num%2 > 0) {
    echo "Mamy liczbę nieparzystą";
}
if ($num%2 == 0) {
    echo "Mamy liczbę parzystą";
}
#raczej nic skomplikowanego, ciekawiej jest w przypadku if.. else gdzie dodatkowo warunek zwróci nam coś, nawet jeśli się nie spełni
#(w teorii powinien, w praktyce bywa różnie :p)
echo "<br>";
$y = 22;
if ($x > $y) {
    echo "liczba $x jest większa od liczby $y";
}
else {
    echo "co ty teraz, przecież liczba $y jest większa od liczby $x!";
}
echo "<br>";

#switch to rozbudowany warunek if'a; wykonuje kody w zależności od różnych przypadków zdefiowanych w instrukcji, 
#w najprostrzym rozumieniu to taki typ warunku, w którym nie piszesz wielu if'ów i skracasz to do switch - case - break :>
#przykład z użyciem if
$z = 0;
if ($z == 0) {
    echo "'z' równa się 0";
} elseif ($z == 1) {
    echo "'z' równa się 1";
} elseif ($z == 2) {
    echo "'z' równa się 2";
} #etc.
#teraz ten sam kod ale z użyciem switch'a
switch ($z) {
    case 0:
        echo "'z' równa się 0";
        break;
    case 1:
        echo "'z' równa się 1";
        break;
    case 2:
        echo "'z' równa się 2";
        break;
}
#żeby była jasność, bez najmniejszego problemu możemy użyć string w warunku
echo "<br>";
$sweet = "choco cookie";
switch ($sweet) {
    case "hazelnut ice cream":
        echo "I'm going to eat a hazelnut ice cream";
        break;
    case "choco cookie":
        echo "I'm going to eat a choco cookie </br>";
    case "choco me too":
        echo "I come for choco cookies too!";
        #w tym przykładzie dopóki: pierwszy warunek jest prawdą oraz po echo nie pojawiło się break- wszystkie linie się wyświetlą
        break;
    case "apple pie":
        echo "I'm going to eat an apple pie";
        break;
}
echo "<br>";
echo "Bon appetit!";
echo "<br>";

#pętla *while wykonuje warunek tak długo dopóki jest on prawdą
while($z <= 100) { #warunek będzie kontynuowany tak długo, jak zmienna x będzie mniejsza lub równa 100
    $z+=10;
    echo "Liczba: $z <br>";
}
$i = 20;
while(!$i == 0) { #warunek się spełnia do momentu gdy zmienna nie równa się 0, gdy 0 == 0 to zwróci nam true i warunek się skończy
    echo $i . "<br>";
    $i = $i - 5;
}

#pętla *do while też tak jak w *while wykonuje warunek tak długo, dopóki jest od prawdą
#różnica jest taka, że w *while wyrażenie jest sprawdzane dopiero po wykonaniu interakcji
do {
    echo $x . ' ';
    $x++;
} while ($x <= 10);
echo "<br>";

#pętla ma wyświetlić liczby nieparzyste z zakresu 20-40 oraz 60-80
$s = 20;
do { 
    if ($s % 2 == 1) {
        if ($s <= 40 || $s >= 60)
            echo $s . ' ' . "<br>";
    }
    $s++;
} while ($s <= 80);
#wyjaśnimy sobie jeszcze na koniec jedną rzecz, a dokładnie różnice między operatorem '==' a '===':
# == używam gdy operator ma sprawdzić czy typy danych (zmiennych) są sobie równe, jeśli tak to zwraca true, a jak nie to false
# === operator ma to samo zadanie, ale w przypadku gdy typy danych są różne (ale mają te same wartości) to zwróci false
#ciężko to przełożyć na ludzki, spróbuje zrobić jasne przykłady D: 
$eq1 = "666";
$eq2 = 666;
var_dump($eq1 == $eq2);
if ($eq1 == $eq2) {
    echo "Equal" . "<br>";
} else {
    echo "Not Equal";
} #wynik: bool(true) Equal

var_dump($eq1 === $eq2);
if ($eq1 === $eq2) {    
    echo "Equal" . "<br>";
} else {
    echo "not Equal";
} #wynik bool(false) not Equal

#pętlę *for głównie używamy gdy potrzebujemy wykonać jakąś czynność określoną ilość razy
for ($yay = 13; $yay >= 0; $yay--) {
    echo $yay . ' ' . "<br>";
}
#teraz coś trudniejszego, dzięki pętli *for obliczę sumę liczb parzystych od 0 do 100, 
#dodatkowo zliczę jeszcze sumę liczb nieparzystych od 0 do 50
$suma100 = 0;
$suma50 = 0;
for ($number = 0; $number <= 100; $number++) {
    if ($number % 2 == 0) {
        $suma100 += $number;
    }
    if ($number % 2 == 1 && $number < 50) {
        $suma50 += $number;
    }
}
echo $suma100 . ' ';
echo $suma50 . ' ';

#pętla foreach działa tylko na tablicach, pozwala napisać kod w oparciu o klucze i wartości w tablicach
###polecam notatki array.php###
$fruits = array("apple", "plum", "watermelon", "grapes", "kiwi", "orange", "dragonfruit");
foreach ($fruits as $value) {
    echo "$value <br>";
}
print_r($fruits) . "<br>";
#dzięki pętli wszystko z tablicy wyświetli się tak jak ustawimy- jedno pod drugim, oddzielone znakami, posortowane etc.
#z samym print_r owszem wyświetlimy tablicę ale domyślnie z kluczami i wartościami + ciężej tu modyfikować/ dawać warunki jak ma wyświetlić


?>