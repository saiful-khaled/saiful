<!DOCTYPE html>
<html>
	<head>
		<title>
			PHP Learning
		</title>
	</head>
	<body>
		<?php
			$var_1 = "I love my country";
            echo strrev($var_1). '<br>';

            $var_2 = 7700;
           echo is_int($var_2). '<br>';

           $r = 10;
	        $A = pi()*$r**2;
	        echo $A. '<br>';

            $var_3 = 100;
            if($var_3%2>0){
                echo $var_3. " is a odd number". '<br>';
            }else{
                echo $var_3. " is a even number". '<br>';
            }

			$city = "Khulna";

			switch ($city) {
			case "Dhaka":
				echo "My favorite city is Dhaka";
				break;
			case "Khulna":
				echo " My favorite city is Khulna";
				break;
			case "Comilla":
				echo "My favorite city is Comilla";
				break;
			default:
				echo "My favorite city is Nator";
			}

		
		?>
	</body>
</html>
