<?php

require 'animals.php';
$animal = new Animals();
$animal->weight = "99 kg weight";
$animal->length = "4 m length";
$animal->height = " 160 cm height";

# I've made a method 'size()' which returns an array (from animals.php file),
# so I used implode function to convert my keys to string and print them with echo;
$hippo_sizes = implode(", ", $animal->size());
echo "This Hippo has: " . $hippo_sizes . " !!" . "<br>";
echo "This Hippo has: " . $animal->size()[0];

# 2 possibilities of taking the first index from the table;
$wielkosci = $animal->size();
$wielkosci[0];

# 2: $wielkosci = $animal->size()[0];


$years = array(2002, 1998, 2018, 1898, 1934, 1800);
echo $years[0];
echo $years[5];
echo $years[count($years)-1];


?>