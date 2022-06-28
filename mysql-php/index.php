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

$sql = "INSERT INTO koteczki.kitulki (imie, wiek, plec, rasa, skala_slodkosci) 
VALUES ('Hamlet', 3, 'kocur', 'dachowiec', 11)";

if ($conn->query($sql) === TRUE) {
  echo "new record created successfully";
} else {
  echo "error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>