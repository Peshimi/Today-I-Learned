<?php
function add($x, $y){
  return $x + $y;
}

function minus($a, $b) {
  return $a - $b;
}
?>

<body>
  <h1 id="header"></h1>
  <script>
    const result = <?php echo add(5, 3)?> ;
    document.getElementById("header").innerHTML = result;
  </script> 

  <h1 id="header2"></h1>
  <script>
    const result2 = <?php echo minus(22, 9)?> ;
    document.getElementById("header2").innerHTML = result2;
  </script>

  <h1 id="header3"></h1>
  <script>
    const result3 = <?php require 'header3.php'; echo mnozenie(4); ?> ;
    document.getElementById("header3").innerHTML = result3;
  </script>

</body>