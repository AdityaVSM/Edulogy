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
		<form name="registerForm" onsubmit="return(validate());" method = "POST">
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
			<p id="errorText" style="text-indent:0;color: white;"></p>
			<input class = "btn-signup" type="submit" value="Signup" >
			
			<a href="login.php"> <input class = "btn-signup" type="button" value="Login" ></a>
		</form>
	</div>

	<script>
    function validate(e) {

        //Email varification
        var emailID = document.registerForm.email.value;
        atpos = emailID.indexOf("@");
        dotpos = emailID.lastIndexOf(".");

        if (atpos < 1 || (dotpos - atpos < 2)) {
            document.getElementById("errorText").innerHTML = "Please enter correct email ID !";
            document.registerForm.email.focus();
            return false;
        }

        //username varification
        var username = document.registerForm.user_name.value;
        var patt1 = /\W/g;
        var result = username.search(patt1);
        if (result != -1) {
            document.getElementById("error_text").innerHTML = "Username sholud not contain any special character except '_' !";
            document.registerForm.username.focus();
            return false;
        }

        //password strength checking
        var password1 = document.registerForm.password.value;
        if (password1.length < 8) {
            document.getElementById("errorText").innerHTML = "Password sholud contain atleast 8 letter!";
            document.registerForm.password.focus();
            return false;
        }

        var pat = /[0-9]/g
        if (!password1.match(pat)) {
            document.getElementById("errorText").innerHTML = "Password sholud contain atleast a Digit!";
            document.registerForm.password.focus();
            return false;
        }

        var pat2 = /[a-z]/g
        if (!password1.match(pat2)) {
            document.getElementById("errorText").innerHTML = "Password sholud contain atleast One Lower case letter!";
            document.registerForm.password.focus();
            return false;
        }

        var pat3 = /[A-Z]/g
        if (!password1.match(pat3)) {
            document.getElementById("errorText").innerHTML = "Password sholud contain atleast One Uppercase character letter!";
            document.registerForm.password.focus();
            return false;
        }

        var pat4 = /\W/g;
        var pat5 = /_/g;
        if (!(password1.match(pat4) || password1.match(pat5))) {
            document.getElementById("errorText").innerHTML = "Password sholud contain atleast One special character!";
            document.registerForm.password.focus();
            return false;
        }

    }
</script>
	
		
</body>
</html>