<?php
$c=5;
$b=13;
function abdur(){
	$a="abdur rahim";
	echo "$a";
		echo "<br>";
	echo $GLOBALS['c'];
	echo "<br>";
	echo $GLOBALS['b'];
}
abdur();
?>


<?php
$x = 5; // global scope
$y=8;
 
function myFunc() {
	$result="I love you";
	echo "<br> $result";
    echo "<br> Variable x inside function is:" .$GLOBALS['y'] ;
} 
myFunc();
echo " <br> $x <br>";
?>


<?php
$result="Ab";
$result1="Rahim";
function w3programmers(){
	$sum1=10;
	$sum2=65;

echo $sum1;
	echo "<br>";
echo $sum2;

echo "<br>";
	echo $GLOBALS ['result'];
	echo $GLOBALS ['result1'];

}
w3programmers();
/*echo "<br> $result";
echo "<br> $result1";*/
?>

<?php
$x=5;
$y=29;
function ab(){
	global $x,$y;
	$x =$x+$y;
}
ab();
echo "<br>";
echo $x;
?>

<?php
function myname(){
	$x=0;
	echo $x;
	$x++;
	echo "<br>";

}
myname();
myname();
myname();
?>

<?php
function name(){
 static $z=5;
	echo $z;
	echo "<br>";
	$z++;

}
name();
name();
name();
?>