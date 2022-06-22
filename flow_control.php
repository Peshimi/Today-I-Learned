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


?>