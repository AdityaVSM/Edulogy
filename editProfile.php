<?php
session_start();
	include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
	

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		//something was posted
		$bio = $_POST['bio'];
		$linkedin_url = $_POST['linkedin_url'];
        $twitter_url = $_POST['twitter_url'];
        $user_name = $user_data['user_name'];

            //save to database
			$query = "UPDATE users  SET  bio='$bio', linkedin_url='$linkedin_url', twitter_uname='$twitter_url'
									where user_name='$user_name';";
			mysqli_query($con,$query);
			header("Location: profile.php");
			die(); 
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #202a3c">
	
	
	<div id = "box">
		<form method = "POST">
			<div style="font-size: 20px; margin: 10px; color: #c3b9b9">Edit profile</div>
			<input id = "text" type="text" name="bio" placeholder="add bio"><br><br>
			<input id = "text" type="text" name="linkedin_url" placeholder="linkedin user name"><br><br>
			<input id = "text" type="text" name="twitter_url" placeholder="twitter user name"><br><br>
			<input id = "button" type="submit" value="Save changes" ><br><br>

		</form>
        <div>

</body>
</html>