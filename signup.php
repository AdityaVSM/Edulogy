<?php
session_start();
	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$first_name = $_POST['first_name'];
		$first_name = $_POST['first_name'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password)){
			//save to database
			$user_id = random_num(20);
			$query = "insert into users(user_id, user_name, password, first_name, last_name, age, email) 
			values('$user_id','$user_name','$password','$first_name','$last_name','$age', '$email');";
			mysqli_query($con,$query);
			header("Location: login.php");
			die(); 
		}else{
			echo "Please enter valid information";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body >
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
		<form method = "POST">
			<h1>SignUP</h1>

			<div class = "textbook">
				<input  type="text" name="first_name" placeholder="first name">
			</div>

			<div class = "textbook">
				<input type="text" name="last_name" placeholder="last name">
			</div>

			<div class = "textbook">
				<input type="email" name="email" placeholder="email">
			</div>

			<div class = "textbook">
				<input  type="text" name="age" placeholder="Age">
			</div>

			<div class = "textbook">
				<input  type="text" name="user_name" placeholder="User name">
			</div>

			<div class = "textbook">
				<input  type="password" name="password" placeholder="Password">
			</div>

			<input class = "btn-signup" type="submit" value="Signup" >
			
			<a href="login.php"> <input class = "btn-signup" type="button" value="Login" ></a>
		</form>
	</div>
	
		
</body>
</html>