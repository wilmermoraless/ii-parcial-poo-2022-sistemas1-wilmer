<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      
</head>
<body>
<table border=1>
<thead>
<th>domingo</th>
<th>lunes</th>
<th>martes</th>
<th>miercoles</th>
<th>jueves</th>
<th>viernes</th>
<th>sabado</th>

</thead>
<tr>
  <?php
for($i=1; $i<=31; $i++){
  
    echo "<td>".$i."</td>";
    if($i % 7 == 0){
        echo "</tr><tr>";
    }
}
  ?> 

</body>
</html>  