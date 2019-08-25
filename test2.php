<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Kalkulator</title>
</head>

<h3>Kalkulator</h3>

<form action="test2.php" method="GET">
Broj1: <input type="number" name="num1">
Broj2: <input type="number" name="num2">
<br>
<br>
<input type="submit" value="Prikazi rezultat">
<br>

<?php

if ((isset ($_GET['num1']) && isset ($_GET['num2']))){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    echo 'Zbir unesenih brojeva:'. ($num1 + $num2). "<br>";
    echo 'Razlika unesenih brojeva:'. ($num1 - $num2). "<br>";
    echo 'Rezultat pomnozenih brojeva:'. ($num1 * $num2). "<br>";
    echo 'Rezultat podijeljenih brojeva:'. ($num1 / $num2). "<br>";

 
    
}

?>

<body>

</body>

</html>