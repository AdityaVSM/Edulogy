<?php
session_start();
	include("connection.php");
	include("functions.php");
    $user_data = check_login($con);
	
	$id = $user_data['id'];

	$query = "select * from bokmark where user_id = '$id'";
	$result = mysqli_query($con,$query);

	

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

	<style>
		body{
			margin:0;
			padding:0;
			font-family:sans-serif;
			background-size:cover;
			background-image:url("images/login-signup-bg.jpg");
		}
		fa-user-{
			position:relative;
			left:1000px;	
		}
	</style>

	<nav class="navbar navbar-light bg-dark justify-content-between" >
		<a style="color:white" class="navbar-brand" href="index.php">Home</a>
		<a style="color:white" class="navbar-brand" href="signup.php">Sign Up</a>
		<a style="color:white" class="navbar-brand" href="login.php">Login</a>
		<a style="color:white" class="navbar-brand" href="logout.php">Logout</a>
		<a style="color:white" class="navbar-brand" href="profile.php">View profile</a>
		<a style="color:white" class="navbar-brand" href="editProfile.php">Edit profile</a>
		<a style="color:white" class="navbar-brand" href="news.php" target="_blank">News</a>
		<a style="color:white" class="navbar-brand" href="teams.php" target="_blank">Team</a>
		<a style="color:white" class="navbar-brand" href="bookmark.php" target="_blank">Bookmarks</a>
	</nav>

    <div class="profile-box" >
		<div style="opacity:1 !important; color:black; font-weight:1;">
			<i class="fas fa-user fa-8x" aria-hidden="true"></i> <br> <br> <br>
			<h1> <?php echo $user_data['first_name'], " ",$user_data['last_name'];?> </h1>
			Age : <?php echo $user_data['age'];?><br>
			E-mail: <?php echo $user_data['email'];?><br>
			Bio: <?php echo $user_data['bio'];?><br>
			Linkedin username: <?php echo $user_data['linkedin_url'];?><br>
			Twitter username : <?php echo $user_data['twitter_uname'];?><br>
		</div>	
	</div> 
	<br><br><br><br><br>
	   
	

</body>
</html>