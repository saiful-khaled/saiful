<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<?php
		$name = $email= $website = $comment = $gender = "";
		$nameError = $emailError = $websiteError = $commentError = $genderError = "";
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST['name'])){
				$nameError = "Fill the name field";
			}else{
				$name = test_inputs($_POST['name']);		
			}
			if(empty($_POST['email'])){
				$emailError = "Fill the email address";
			}else{
				
				$email = test_inputs($_POST['email']);
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);
				if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
					$email = $email. " is a valid email";
				}else{
					$emailError = $email. "is not a valid email";
				}
			}
			if(empty($_POST['website'])){
				$websiteError = "Fill the website address";
			}else{
				
				$website = test_inputs($_POST['website']);
				$website = filter_var($website, FILTER_SANITIZE_URL);
				if(!filter_var($website, FILTER_VALIDATE_URL) === false){
					$website = $website. " is a valid website";
				}else{
					$websiteError = "Invalid website";
				}
			}
			if(empty($_POST['gender'])){
				$genderError = "Fill the email address";
			}else{
				
				$gender = test_inputs($_POST['gender']);
			}
		}

		function test_inputs($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
	<h3>PHP Form Validation</h3>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		Name: <input type="text" name="name">
		<span class="error"><?php echo $nameError; ?></span><br>

		email: <input type="text" name="email">
		<span class="error"><?php echo $emailError; ?></span><br>
		Website: <input type="text" name="website">
		<span class="error"><?php echo $websiteError; ?></span><br>
		Comment: <textarea name="comment" rows="3" cols="30"></textarea>
		<span class="error"><?php echo $commentError; ?></span><br>
		Gender:
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<span class="error"><?php echo $genderError; ?></span>
		<br>
		<input type="submit" value="Submit">

	</form>
	<?php
	echo "Your Input <br>";
	
	echo $name. " <br>";
	echo $email. " <br>";
	echo $website. " <br>";
	echo $comment. " <br>";
	echo $gender. " <br>";
	?>
</body>
</html>