<?php
#_-_-_ Typy zmiennych _-_-_

#integer dla liczb całkowitych typu 1, 100, -111 etc.
$age = 21;
echo $age . "\n";

#float dla liczb rzeczywistych np. 1.71, -1000 etc.
$exp = 324.55;
echo $exp . "<br>";

#string czyli typ danych przechowujący ciąg znaków
$kitek = "robi miau miau";
echo $kitek  . "\r\n";

#bool to typ logiczny i przyjmuje wartości prawda / fałsz
$isClose = true;
echo $isClose . "<br>";

#array to typ przechowujący tablice, brzmi sensownie?
#nic bardziej mylnego: mamy tablicę prostą, gdzie klucz poszczególnych elementów jest liczbą całkowitą od [0]
#oraz tablice asocjacyjne, które posiadają dodatkowo klucz w formie tesktowej *string*
$kotek_potrzebuje = ["jedzonko", "przekąski", "smaczne saszetki", "wygodne miejsce do spanka"];
$cechy_kotka = ['łapki'=>'różowe', 'nosek'=>'mokry', 'futerko'=>'zawsze czyściutkie', 'głodny'=>'zawsze'];
print_r($kotek_potrzebuje);
echo "<br>";
print_r($cechy_kotka); 
 
?>