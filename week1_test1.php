<html>
<head>
<title>Moj prvi php zadatak</title>
</head>

<body>

<?php 

echo "Hello World!"; 
echo "<br>";
echo "Helooooo!!!";
echo "<br>";

$color = "blue";

echo "My sneakers are " . $color . "<br>";
?>
<br>
<h3>Vjezba br. 1</h3>

<?php 
$balance = 0;

$balance++;
--$balance;

echo "<br>";

echo $balance = $balance++ + 6;
echo $balance = --$balance - 5;
echo "<br>";

$a1 = 30;
$b1 = 25;

$c1 = $a1 + $b1;
echo $c1; 
echo"<br>";
$d1 = $a1 * $b1;
echo $d1;
echo"<br>";

$c2 = $a1 - $b1;
echo $c2;
?>
<h3>Vjezba br. 2</h3>

<?php 
$aa = "5";
$bb = 5;


$cc = $aa * $bb;
echo $cc;
echo "<br>";
 
function myTest() {
    $x = 0;
    $x++;
    echo $x;
}
myTest();
echo "<br>";
myTest();
echo "<br>";

?>
<h3>Jos jedna vjezba</h3>

<?php

$count = 20;
while($count>0)
{
    echo $count. "<br>";
    $count--;
    
}

$t = date("H");

if ($t < "16") {
    echo "Uzivajte u danu!";
} else {
    echo "Uzivajte u veceri!";
}

?>
<h3>Jos jedna vjezbica</h3>
<?php 
$datum = date("d/m/y");
echo $datum;

echo "<br>";

$iznosA= 14;
$iznosB = 7;
if ($iznosB > 7) {
    echo "Racun je pozitivan";
} else if ($iznosB == 7) {
    echo "Racun je kritican!";
} else {
    echo "Racun je negativan";
}
echo "<br>";
if ($iznosA > $iznosB) {
    echo "Hvala vam za vasu uplatu!";
}
?>



</body>
</html>
