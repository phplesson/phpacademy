<?php
$name = "Viacheslav Zhyzhko";
$age = 23;
echo "My name is ".$name." I am ".$age." years old";
echo "<hr>";

if ($age>=18 and $age<=59){
	echo "Vam eshe rabotat i rabotat...";
	if ($age > 59) {
		echo "Vam pora na pensiu";
	}
	if ($age>=0 and $age <= 17)
	{
		echo "Vam eshe rano rabotat";
	}
	if ($age<0)
	{
		echo "Neizvestnoe chislo!";
	}
}
echo "<hr>";
$day = 7;

switch ($day) {
case ($day>=1 and $day<=5):
    echo "Eto rabochiy den";
    break;
case ($day>=6 and $day<=7):
    echo "Eto vihodnoi den";
    break;
case ($day<1 or $day>7):
    echo "Neizvestniy den";
    break;
}
echo "<hr>";
$s1 = 200;
$t1 = 2;
$s2 = 200000;
$t2 = 3600;

$res1 = $s1/$t1;
$res2 = $s2/$t2;

echo "$res1"." kilometers per hour"."<br>";
echo "$res2"." meters per second";
echo "<hr>";

$foo = "bar";
$bar = 10;
echo "bar = {${$foo}}";//intresting method!
echo "<hr>";
$a1 = rand(0,100);
$a2 = rand(0,100);
if ($a1>$a2){
	echo "chislo a1 bolshe a2" ;
}elseif ($a1==$a2){
	echo "chislo a1 = a2";
}else{
	echo "chislo a2 bolshe a1";
}
echo "<hr>";

$tempA = '78';
$tempB = 78;
if ($tempA == $tempB){
	echo "chisla ravny";
}else{
	echo "neravny";
}
echo "<hr>";
$tempAA = '78';
$tempBB = 78;
if ($tempAA === $tempBB){
	echo "chisla ekv";
}else{
	echo "ne ekv";
}
echo "<hr>";
var_dump($tempA == $tempB);
echo "<hr>";
$chislo20 = 20;
var_dump(boolval($chislo20));
echo "<hr>";
$chislo0 = 0;
var_dump(boolval($chislo0));
echo "<hr>";
$chislo_20= -20;
var_dump(boolval($chislo_20));
$temp_str = "Salyt!";
echo $temp_str."<br>";
print_r($temp_str)."<br>";/* print_r func  */
printf($temp_str)."<br>";// printf func
echo "<hr>";
define("DAYS_COUNT",    "7");
define("MONTH_COUNT",    "12");
echo DAYS_COUNT;
echo "<hr>";
echo MONTH_COUNT;