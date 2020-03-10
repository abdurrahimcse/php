<?php
$city="Dhaka";
$$city="my live in";
echo $Dhaka;
echo "<br>";
?>

<?php
$city="Dhaka";
$$city="104 Sqare mils";
echo "$city in capital of Bangladesh <br>";
echo "The Size of $city is $Dhaka <br>";
?>

<?php
$sonar="amr";
$bangla="sonar";
$ami="bangla";
$tomay="ami";
$d="tomay";
/* echo $d;
 echo "<br>";
 echo $$d;
 echo $$$d;
 echo $$$$d;
 echo $$$$$d;*/

 $price_for_monday=10;
 $price_for_tuesday=20;
 $price_for_wednesday=30;

$today="monday";
$price_for_today=${'price_for_'.$today};
echo "$price_for_today";
?>