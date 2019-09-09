<!DOCTYPE html>
<html>
<body>

<?php
$x = 1;
while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

$numbers = range(1, 10);
echo implode('+', $numbers) . '=' . array_sum($numbers);
echo "<br>";

echo "Hello World!";

echo "<br>";
$text = 'Hello';
$text = 'World';
echo $text;
echo "<br>";

function hello() {
	$txt = 'Hello World'; // local scope
 	echo $txt; // $txt can be used here
} 
hello();

echo "<br>";

$x = 'danijel';
$y = 'vrebac';

function websiteName() {
    global $x, $y;
    echo $x, $y;
}

websiteName();

echo "<br>";

function test() {
    static $number = 0;
    echo $number . "<br>";
    $number = $number + 5;
}
test();
test();
test();
test();

echo "<br>";

$user = "Alex";
if(($user=="John") && ($user=="Darkan"))
{
	Print "Hello John.";
}
else
{
	Print "You are not John.";
}
echo "<br>";

$user = "Danijel";

echo "My name is $user.";

echo "<br>";

$fruit = "Apple";
// echo "$fruits"; # there's no variable $fruits
print "{$fruit}s";

echo "<br>";

$link = 'https://developer.hyvor.com';
echo "<a href=$link>Hyvor Developer</a>";

echo "<br>";

$array = ['Apple', 'Banana', 'Orange', 'Mango'];
var_dump($array);

echo "<br>";

$day = date("j");
if ($day <  15) {
    echo "Trosite prvu polovinu mjeseca.";
} 
else   {
    echo "Trosite drugu polovinu mjeseca.";
    
}

echo "<br>";

$randomRezultati = rand(0,4);
if ($randomRezultati == 0) {
    echo "Nula bodova";
}
else if ($randomRezultati == 1) {
    echo "Lose";
}
else if ($randomRezultati == 2) {
    echo "Osrednje";
}
else if ($randomRezultati == 3) {
    echo "Malo bolji";
}
else if ($randomRezultati == 4) {
    echo "Odlican";
}

echo "<br>";

$a = 10;
if ($a >= 0) {
	echo 'Positive Number <br>';
	if ($a % 10 === 0) {
		echo 'The number is a multiple of 10';
	}
} else {
	echo 'Negative Number. Please enter a positive one';
}
echo "<br>";

$b = 1;
while ($b <20) {
    $b++;
    echo $b;
}
echo "<br>";

$a = 1;
do {
	echo 'The number is ' . $a;
} while ($a > 1);

echo "<br>";

for ($a = 0; $a < 50; $a++) {
    echo $a;
}
echo "<br>";

$a = 0;
while ($a < 10) {
    echo $a;
    if ($a === 5) {
        break;
    }
    $a++;

    echo "<br>";

    $a = 0;
while ($a < 10) {
	if ($a === 5) {
		$a++;
		continue; // 5 is not printed
	}
	echo $a . '<br>';
	$a++;
} 

echo "<br>";

function myName($name) {
    echo " Moje ime je "  .   $name;
    echo "<br>";
}
myName('Dani');
myName('Deacon');
myName('Frost');
myName('Json');
    
}
echo "<br>";

function sum($num1, $num2) {
	return $num1 + $num2;
}

echo '5 + 5 = ' . sum(5,5) . '<br>';
echo '4 + 3 = ' . sum(4,3) . '<br>';
echo '8 + 1 = ' . sum(8,1) . '<br>';

var_dump($_SERVER);
echo "<br>";

?>

<form action="provjera.php" method="POST">
     Num1: <input type="number" name="num1" value="<?= $_POST['num1'] ?>">
     Num2: <input type="number" name="num2" value="<?= $_POST['num2'] ?>">
     <input type="submit" value="+" name="oper">
     <input type="submit" value="-" name="oper">
     <input type="submit" value="%" name="oper">
     <input type="submit" value="*" name="oper">
</form>
<?php
$num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $oper = $_POST['oper'];
    echo 'Rezultat: ' . number_format(calculate($num1, $num2, $oper), 2);


    function calculate($num1, $num2, $oper) {
        switch ($oper) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '%':
                return $num1 / $num2;
            case '*':
                return $num1 * $num2;
            default:
                return 0;
        }
    }

    echo "<br>";
    $x =8;
$y =2;
while($x >= 2 ) {
   --$x;
   $y *= $x;
 echo $y . "\n";
}
?>





</body>
</html>