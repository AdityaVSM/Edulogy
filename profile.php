<?php
session_start();
	include("connection.php");
	include("functions.php");
    $user_data = check_login($con);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css"/>
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

	<nav class="navbar navbar-light bg-dark justify-content-between" >
		<a style="color:white" class="navbar-brand" href="index.php">Home</a>
		<a style="color:white" class="navbar-brand" href="signup.php">Sign Up</a>
		<a style="color:white" class="navbar-brand" href="login.php">Login</a>
		<a style="color:white" class="navbar-brand" href="logout.php">Logout</a>
		<a style="color:white" class="navbar-brand" href="profile.php">View profile</a>
		<a style="color:white" class="navbar-brand" href="editProfile.php">Edit profile</a>
	</nav>

    <div class="profile-box">
		<h1> Your Profile </h1>
    	Name: <?php echo $user_data['first_name'], " ",$user_data['last_name'];?><br>
    	Age : <?php echo $user_data['age'];?><br>
		E-mail: <?php echo $user_data['email'];?><br>
		Bio: <?php echo $user_data['bio'];?><br>
		Linkedin username: <?php echo $user_data['linkedin_url'];?><br>
    	Twitter username : <?php echo $user_data['twitter_uname'];?><br>
	</div>



    
	

</body>
</html>