<!DOCTYPE html>
<html>
      
<head>
<title> Button test </title>
</head>
  
<body style="text-align:center;">

  <?php
    if(array_key_exists('button1', $_POST)) {
      button1();
      }
      else if(array_key_exists('button2', $_POST)) {
            button2();
      }
    function button1() {
      echo "This is Button1 that is selected";
      }
     function button2() {
       echo var_dump($_POST);
      }
    ?>
  
    <form method="post">
        <input type="submit" name="button1"
          class="button" value="Button1" />
          
        <input type="submit" name="button2"
          class="button" value="Button2" />
        
        <input type="textarea" name="ta"
          value="textarea" />
    </form>
</head>
  
</html>