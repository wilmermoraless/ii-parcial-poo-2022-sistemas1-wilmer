<!DOCTYPE html>
<html lang="en">
<head>
    <p><h1>tabla de 5 columnas y 10 filas</h1></p>
</head>
<body>
  <?php
  echo "<table border=1>";
  $n=1;
  for($n1=1; $n1<=5; $n1++){
  echo "<tr>";
  for($n2=1; $n2<=10; $n2++){
   echo "<td>", $n, "</td>";
   $n=$n+1;
  }
 echo "</tr>";
  }
  echo "</table>";
  ?> 
</body>
</html>