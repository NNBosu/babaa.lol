<?php 
session_start();

	include("assets/database/connection.php");
	include("assets/database/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			echo "<p class='error__mesage'>Wrong Username or Password!</p>";
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: welcome.php");
						die;
					}
				}
			}
		} else {
			echo "<p class='error__mesage'>All fields need to be required!</p>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Login_Design</title>
</head>
<body>
    
<div class="form">
    <div class="form__title">
        <h1>Login</h1>
    </div>
	<form method="post">
			<p>Username</p>
				<input type="text" minlength="5" maxlength="10" name="user_name" placeholder="Username" />
			<p>Password</p>
				<input id="pwd" type="password" minlength="7" maxlength="15" name="password" placeholder="Password" />
				<input id="check" class="checkbox" type="checkbox" style="cursor: pointer;outline: none;margin-right: 5px;">Show password</input>
			<p id="text" style="margin-left: -2px;">Not registered?<a href="signup.php" id="signup_click">Signup!</a></p>
    	<button type="submit" class="login__button">Login</button>
	</form>
</div>

<script src="assets/js/app.js"></script>
</body>
</html>