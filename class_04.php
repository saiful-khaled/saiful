<!DOCTYPE html>
<html>
	<head>
		<title>
			PHP Learning
		</title>
	</head>
	<body>
		<?php
		//nested if .... else ... elseif
				$a = 12;
				$b = 15;
				$c = 14;
				
				if($a<$b){
					echo $a. " is less than ". $b."<br>";
					if($b<=$c){
						if($b==$c){
							echo $b. " is equal to ".$c."<br>";
						}else{
							echo $b. " is less than ".$c."<br>";
						}			
						
					}else{
						echo $b. " is greater than ".$c."<br>";
					}
				}elseif($a == $b){
					echo $a." is equal to ".$b."<br>";
				}else{
					echo $a." is greater than ".$b."<br>";
				}
			//sum of all odd numbers between 1 to 20
			$oddNumber = array();
			for($i = 1; $i<=20; $i++){
				if($i%2){
					array_push($oddNumber, $i);
				}	
			}
			echo "Odd Numbers are ";
			$k = 0;
			$sumofOddNumber = 0;
			while($k<count($oddNumber)){
				echo $oddNumber[$k].", ";
				$sumofOddNumber += $oddNumber[$k];
				$k++;
			}
			echo "<br> Sum of Odd number = ".$sumofOddNumber;
			
			
			//sum of all even numbers between 1 to 30
			$evenNumber = array();
			for($i = 1; $i<=20; $i++){
				if(!($i%2)){
					array_push($evenNumber, $i);
				}	
			}
			echo "<br>Even Numbers are ";
			$k = 0;
			$sumofevenNumber = 0;
			while($k<count($evenNumber)){
				echo $evenNumber[$k].", ";
				$sumofevenNumber += $evenNumber[$k];
				$k++;
			}
			echo "<br> Sum of even number = ".$sumofevenNumber;
			
			//count the number of digits in a number
			$number = 256873946;
			$numDig = strlen((string)$number);
			echo "<br>Number = ".$number." and it's number of digits = ".$numDig."<br>";
			
			//check whether a number is a palindrome or not
			$number = 223454321;
			//$number = 24142;
			//$number = 1234321;
			$x = 0;
			$num =$number;
			
			while(floor($number))
			{  
			$remain = $number%10;
			$x = $x * 10 + $remain;  
			$number = $number/10;
			}  
			 
			if($num==$x)
			{  
			echo "$num is a Palindrome number.";  
			}
			 
			else
			{  
			echo "$num is not a Palindrome number.";  
			}  
			
			//print all even numbers between 1 to 100. - using while loop. 
			
			$l = 1;
			echo "<br> All even numbers between 1 to 100 are ";
			while($l<=100){
				if(!($l%2)){
					echo $l.", ";
				}
				$l++;
			}
			
			//all odd numbers between 1 to 100 - using a do-while loop.
			$l = 1;
			echo "<br> All odd numbers between 1 to 100 are ";
			do{
				if(($l%2)){
					echo $l.", ";
				}
				$l++;
			}while($l<=100);
				
			//create an array and initialize ten values
			$ar2 = array("10","25","35","15","88","56", "45", "40", "70", "110");
			echo "<br> Array values are ";
			$arL= count($ar2);
			for($i=0; $i<$arL; $i++){
				echo $ar2[$i].", ";
			}
			//to store the values (70, 700, 7000) to the previous array
			
			array_push($ar2, "70", "700", "7000");
			$arL2= count($ar2);
			echo "<br> Array values are ";
			for($i=0; $i<$arL2; $i++){
				echo $ar2[$i].", ";
			}
			//to delete the last value of the array and show the array
			array_pOP($ar2);
			$arL3= count($ar2);
			echo "<br> Array values are ";
			for($i=0; $i<$arL3; $i++){
				echo $ar2[$i].", ";
			}
			
		?>
	</body>
</html>
