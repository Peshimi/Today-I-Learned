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