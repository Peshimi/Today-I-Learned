<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8" />
    <title> Simple Tic Tac Toe Game </title>
  </head>

  <body>
    <header>
      <h1> Tic Tac Toe </h1>
    </header>




  <div id="demo">
    <h2>Let AJAX change this text</h2>
    <button type="button" onclick="loadDoc()">Change Content</button>
  </div>
  <script type ="text/javascript">
    function loadDoc() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "test.php", true);
      xhttp.send();
    }
  </script>

  </body>

</html>