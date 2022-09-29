<!DOCTYPE html>
<html>
	<head>
		<title>
			PHP Learning
		</title>
	</head>
	<body>
		<?php
			$var_1 = 250; 
			$var_2 = 100;

			echo "First value = ".$var_1;
			echo "<br>Second value =".$var_2;
			echo "<br>Addition = ".($var_1+$var_2);
			echo "<br> Subtruction = ".($var_1-$var_2);
			echo "<br> Multiplication = ".($var_1*$var_2);
			echo "<br> Division = ".($var_1/$var_2);
			echo "<br> Modulus = ".($var_1%$var_2);

			$x = 10;
			$y = ++$x + ++$x - $x++; 
			
			//echo "<br>".$x++;
			echo "<br>".$y;

			$a = 10;
			$b = "70";
			$c = ($a === $b);
			echo $c;

			$a = 10;
        	$b = 20;
        	$c = 30;
        	echo "<br>". (($a >= $b) || ($b < $c))


		
		?>
	</body>
</html>
