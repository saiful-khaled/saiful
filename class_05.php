<!DOCTYPE html>
<html>
	<head>
		<title>
			PHP Learning
		</title>
	</head>
	<body>
		<?php
		//nested loop triangular pattern using * sign

		for($i=1; $i<=5; $i++){
			for($j = 1; $j<=$i; $j++){
				echo "*";
			}
			echo "<br>";
		}
		
		//nested loop rectangular pattern using * sign
		echo "<br><br>";
		for($i=1; $i<=4; $i++){
			for($j = 1; $j<=3; $j++){
				echo "*";
			}
			echo "<br>";
		}
		
		//associative array
		echo "<br>";
		$marks = array( "Bangla" => "90", "English" => "72", "Math" => "65", "science");
		 	echo "Marks of Bangla = ".$marks['Bangla'];
			echo "<br> Or <br>";

			foreach($marks as $m => $value){
				echo "Subject:". $m. ", Marks: ". $value. "<br>";
			}
		?>
	</body>
</html>
