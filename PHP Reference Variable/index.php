<?php
//Reference variables Type
//1.Assigning By Reference.
//2.Passing By Reference.
//3.Returning By Reference.
?>


<?php
//****
//1.Assigning By Reference
$a=&$b;

$b="India";
$a="Bangladesh";
echo $a;
echo "<br>";
echo $b;

echo "<br>";
?>

<?php
//*****
//2.Passing By Reference
function goodbye(&$rahim){
	$rahim="See Do not You";
}
$myvar="This There";
goodbye($myvar);
echo $myvar;
?>
<?php
echo "<br>";
//*****
//3.Returning By Reference.
$a=10;
function &test()
{
	global $a;
	return $a;

}
$b=&test();
$b--;
echo $a;
echo "<br>";


//*****
$bands= array('the who', 'the hello','the world');
foreach ($bands as $band ) {
	$band= strtoupper($band);
}
echo "<pre>";
print_r($bands);
echo "<br><br><br>";

//*****
$bands= array('the who', 'the hello','the world');
foreach ($bands as &$band ) {
	$band= strtoupper($band);
}
echo "<pre>";
print_r($bands);

//*****
class myClass{
	public $a="America";
	public $b="India";
	public $c="Pakistan";
}
foreach (new myClass as &$my) {
	$my=strtoupper($my);

}

echo "<pre>";
	print_r(new myClass);
?>
