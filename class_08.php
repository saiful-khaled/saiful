<?php

//Write a program make a simple calculator
$var1 = 12;
$var2 = 5;

function addition($var1, $var2){
	return $var1+$var2;
}

echo "Variable1 + Variable2 = ". addition($var1, $var2);
echo "<br>";

function subtraction($var1, $var2){
	return $var1-$var2;
}

echo "Variable1 - Variable2 = ". subtraction($var1, $var2);
echo "<br>";

function multiplication($var1, $var2){
	return $var1*$var2;
}

echo "Variable1 x Variable2 = ". multiplication($var1, $var2);
echo "<br>";

function divisions($var1, $var2){
	return $var1/$var2;
}

function modulas($var1, $var2){
	return $var1%$var2;
}
echo "Modulas = ".modulas($var1, $var2);
echo "<br>";

//Write a program to concate the two strings "ABCD" and "EFG"
$var1 = "ABCD";
$var2 = "EFG";

$var3 = $var1. " ".$var2;
echo $var3;

//two functions that can do addition and subtraction
$var4 = 6;
$var5 = 4;

function addition2($var1, $var2){
	return $var1+$var2;
}

echo "<br> Value1 + Value2 = ". addition2($var4, $var5);
echo "<br>";

function subtraction2($var1, $var2){
	return $var1-$var2;
}

echo "Value1 - Value2 = ". subtraction2($var4, $var5);
echo "<br>";

//Write the structure of three type loops (for, while, do while
echo "For loop result: <br>";
for($i = 1; $i<10; $i++){
	echo $i."<br>";
}

echo "While loop result: <br>";
$i=1;
while( $i<10){
	echo $i."<br>";
	$i++;
}

echo "Do While loop result: <br>";
$i=1;
do{
	echo $i."<br>";
	$i++;
}
while( $i<10);

	//conditional statement
	$a = 15;
	$b = 18;
	if($a <= $b){
		if($a < $b){
			echo "a is less than b";
		}else{
			echo "a is equal to b";
		}
	}else{
		echo "a is greater than b";
	}
?>