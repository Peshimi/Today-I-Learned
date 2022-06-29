<!DOCTYPE html>
<html>
      
<head>
<title> Meow Meow </title>
</head>

<body style="text-align:center;">

<?php
  $servername = "localhost";
  $username = "catlover";
  $password = "doggosareseconds";
  // create connection \\
  $conn = new mysqli($servername, $username, $password);
?>

<h1> Witaj w świecie kitków! </h1>
  <p>Jeśli kochasz kitki, dodaj jakiegoś do mojej biblioteki ก₍⸍⸌̣ʷ̣̫⸍̣⸌₎ค</p>

<?php
  if(array_key_exists('button1', $_POST)) {
    button1();
    }

  function button1() {
    $take_name = ($_POST['imie']);
    echo "This is Button1 that is selected";
    echo $take_name;
    }
?>

<form method="post">
<!--  <input type="submit" name="button1"
    class="button" value="Imię" /> -->
  <br><input type="textarea" name="imie"
    value="Imię" /></br>

  <!--<br><input type="submit" name="button2"
    class="button" value="Wiek" /> -->
  <br><input type="textarea" name="wiek"
    value="Wiek" /></br>

  <!--<input type="submit" name="button3"
    class="button" value="Płeć" /> -->
  <br><input type="textarea" name="plec"
    value="Płeć" /></br>

  <!--<br><input type="submit" name="button4"
    class="button" value="Rasa" /> -->
  <br><input type="textarea" name="rasa"
    value="Rasa" /></br>

  <!--<br><input type="submit" name="button4"
    class="button" value="Skala słodkości" /> -->
  <br><input type="textarea" name="skala_slodkosci"
    value="Skala słodkości" /> </br>

  <br><input type="submit" name="button1"
    class="button" value="Zatwierdź" /></br>     
</form>

<?php
$sql = "SELECT imie, wiek, plec, rasa, skala_slodkosci FROM koteczki.kitulki";
$result = $conn->query($sql);
?>

</body>

</html>