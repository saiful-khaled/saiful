<!DOCTYPE html>
<html>
	<head>
		<title>
			PHP Learning
		</title>
	</head>
	<body>
		<?php
		//show this time and output (10:10pm 10-10-2022)
		$date = strtotime("10:10pm October 10 2022");
		echo "Date is " . date("h:ia d-m-Y", $date);

		//show the current time with your time zone
		date_default_timezone_set("Asia/Dhaka");
		echo "<br> Current Date Time is ". date("Y-m-d h:i:sa")."<br>";

		//date and time from string
		$date1=strtotime("tomorrow");
		echo "Tomorrow date is ".date("d-m-Y h:i:sa", $date1) . "<br>";

		$date2=strtotime("Next Sunday");
		echo "Next Sunday date is ". date("Y-m-d h:i:sa", $date2) . "<br>";

		$date3=strtotime("+5 Days");
		echo date("Y-m-d h:i:sa", $date3) . "<br>";

		$date4 = strtotime("-1 Days");
		echo date("d-m-Y h:i:sa", $date4);

		$date5 = strtotime("15-08-2022");
		echo "<br> Start Date is ". date("Y-m-d", $date5);
		$date6 = strtotime("-2 Days", $date5);
		echo "<br>". date("Y-m-d", $date6);

		?>
	</body>
</html>
