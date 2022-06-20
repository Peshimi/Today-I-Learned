<?php
#_-_-_ Array - potężne tablice z jeszcze potężniejszym potencjałem _-_-_

#przykład tablicy prostej i asocjacyjej
$kotek_potrzebuje = ["jedzonko", "przekąski", "smaczne saszetki", "wygodne miejsce do spanka"];
$cechy_kotka = ['łapki'=>'różowe', 'nosek'=>'mokry', 'futerko'=>'zawsze czyściutkie', 'głodny'=>'zawsze'];

#sprawdzamy ile mamy kluczy w tabeli, var_dump zwraca nam liczbę kluczy wraz z typem, a print_r tylko liczbę kluczy 
var_dump(count($kotek_potrzebuje));
print_r(count($cechy_kotka));
echo "<br>";

#zmienić wartość klucza można wykonać w następujący sposób:
$shrek_movie = array("Shrek" => "31", "Fiona" => "25", "Puss in boots" => "2", "Donkey" => "19");
$shrek_movie["Puss in boots"] = 4;
print_r($shrek_movie);

#możemy sprawdzić czy jakiś konkretny element znajduje się w tablicy, np używyjąc krótkiego warunku z 'empty'
if (empty($kotek_potrzebuje["jedzonko"])) {
    echo "Kotek dostanie smaczne jedzenie";
}
else {
    echo "Trzeba iść do sklepu po konserwę";
}
echo "<br>";
if (empty($kotek_potrzebuje["iść do weterynarza!"])){
    array_push($kotek_potrzebuje, "iść do weterynarza!");
    print_r($kotek_potrzebuje);
    echo "<br>";
    echo "Jeśli kotek wymaga wizyty kontrolnej to idziemy, niezwłocznie";
}
else {
    echo "On nie jest chory, tylko głodny!!!";
}
echo "<br>";

#tablice można posortować na kilka sposobów
$pets = array("psy", "koty", "słonie", "węże", "aligatory", "papugi", "gepardy", "jeże");
#sort posurtuje alfabetycznie od A-Z
#rsort posortuje alfabetycznie ale od Z-A *reverse=>odwrotnie
rsort($pets);
$clength = count($pets);
for($m=0; $m < $clength; $m++) {
    echo $pets[$m];
    echo "<br>";
}
#asort posortuje według wartości *according to value => to ($key_value)
#ksort posortuje według klucza according to key => ($key)
#arsort i krsort analogicznie sortują według wartości/ klucza ale w przeciwnej kolejności
ksort($cechy_kotka);
foreach($cechy_kotka as $key => $key_value) {
    echo "Key= " . $key . ", " . "Value= " . $key_value;
    echo "<br>"; 
}

?>