<?php
	session_start();
	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		if(!empty($user_name) && !empty($password)){
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con,$query);
			if($result && mysqli_num_rows($result) > 0){
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['password'] === $password){
					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: index.php");
					die(); 
				}
			}
			echo "<p style='color:white; text-align:center; font-size:30px;'>" . "Wrong username or password!" ."</p>";
		}else{
			echo "Please enter valid information";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">	
	<link rel="stylesheet"  href="style.css" type="text/css" />
	
</head>
<body>
	<style>
		@import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		body{
			margin:0;
			padding:0;
			font-family:sans-serif;
			background:url("images/login-signup-bg.jpg") no-repeat;
			background-size:cover;
		}
	</style>

	<div class = "login-box">
		<form method = "post">
			<h1>Login</h1>

			<div class = "textbook">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="user_name" placeholder = "Username" >
			</div>

			<div class = "textbook">
				<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				<input type="password" name="password" placeholder ="Password">		
			</div>
			
			<input class="btn-signup" type="submit" value="Login"><br>
			<a href="signup.php" ><input class="btn-signup" type="button" value="Sign Up"></a><br><br>
		</form>
	</div>

</body>
</html>