<?php
#_-_-_ Array - potężne tablice z jeszcze potężniejszym potencjałem _-_-_

#przykład tablicy prostej i asocjacyjej
$kotek_potrzebuje = ["jedzonko", "przekąski", "smaczne saszetki", "wygodne miejsce do spanka"];
$cechy_kotka = ['łapki'=>'różowe', 'nosek'=>'mokry', 'futerko'=>'zawsze czyściutkie', 'głodny'=>'zawsze'];

#sprawdzamy ile mamy kluczy w tabeli, var_dump zwraca nam liczbę kluczy wraz z typem, a print_r tylko liczbę kluczy 
var_dump(count($kotek_potrzebuje));
print_r(count($cechy_kotka));
echo "<br>";

#możemy sprawdzić czy jakiś konkretny element znajduje się w tablicy, np używyjąc krótkiego warunku z 'empty'
if (empty($kotek_potrzebuje["jedzonko"])) {
    echo "Kotek dostanie smaczne jedzenie";
}
else {
    echo "Trzeba iść do sklepu po konserwę";
}

?>