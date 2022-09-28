<!DOCTYPE html>
<html>
	<head>
		<title>
			PHP Learning
		</title>
	</head>
	<body>
		<?php
	// check whether a number is prime or not

	function prime_number($num){
			if($num>1){
				$check = 0;
				for($i=2; $i<$num; $i++){
					if(($num%$i) == 0){
						$check++;
						break;
					}
				}

				if($check === 0){
					echo $num. " is a prime number<br>";
				}else{
					echo $num. " is not a prime number<br>";
				}
			}						
		}

		$val = 19;
		
		prime_number($val,);


		//take an array as parameter and print the values of the array

		$students = array("Rahim", "Karim", "Alim", "Jobber");

		function students_list($stu){
			$length = count($stu);

			for($i = 0; $i< $length; $i++){
				echo $stu[$i]."<br>";
			}
		}

		students_list($students);


?>

	</body>
</html>
