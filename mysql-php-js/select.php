<?php

$servername = "localhost";
$username = "catlover";
$password = "doggosareseconds";

// create connection \\
$conn = new mysqli($servername, $username, $password);

// check connection \\
if ($conn->connect_error) {
  die("Connerction failed: " . $conn->connect_error);
}
// echo "Connection successfully";

$sql = "SELECT imie, wiek, plec, rasa, skala_slodkosci FROM koteczki.kitulki";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row \\
  while($row = $result->fetch_assoc()) {
    echo "imie: " . $row["imie"] . " - wiek: " . $row["wiek"] . " - plec: " .
    $row["plec"] . " - rasa: " . $row["rasa"] . " - skala_slodkosci: " . 
    $row["skala_slodkosci"] . "<br>";
  } 
} else {
  echo "0 results";
}

$conn->close();

?>