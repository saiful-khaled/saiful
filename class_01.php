<!DOCTYPE html>
<html>
	<head>
		<title>
			PHP Learning
		</title>
	</head>
	<body>
		<?php
			echo "PHP first class.";
			echo "<br>";
			print ("PHP first class");
			echo "<br>";
			$var_1 = "How much price do I have to pay?"; /*$var_1 is a string variable*/
			echo $var_1;
			echo "<br>";
			$a = 1000; /*$a is an integer variable*/
			$b = 700.79; /*$b is a float variable*/
			$c = $a - $b;
			echo "Product price TK".$b." , Customer Give him TK".$a. " then Supplier Returned to customer TK". $c;
			echo "<br>";
			$var_2 = true; /*$var_2 is a boolean variable*/
			echo "Given information is ".$var_2;
			echo "<br>";
			$var_3 = NULL; 
			echo $var_3;
			echo "<br>";
			var_dump ($var_1);
			echo "<br>";
			var_dump ($a);
			echo "<br>";
			var_dump ($b);
			echo "<br>";
			var_dump ($var_2);
			echo "<br>";
			var_dump ($var_3);
		
		?>
	</body>
</html>
