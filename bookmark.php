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
	
	<link rel="stylesheet" type="text/css" href="style.css"/>

</head>
<body>

	<style>
		@import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		body{
			margin:0;
			padding:0;
			font-family:sans-serif;
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
		<a style="color:white" class="navbar-brand" href="news.php" target="_blank">News</a>
		<a style="color:white" class="navbar-brand" href="bookmark.php" target="_blank">Bookmarks</a>

	</nav>
        <br><br>
	<div class="bookmark-box">
		<h1>See your bookmarks here:</h1> <br><br>
		<ul>
				<?php
				if($result && mysqli_num_rows($result)>0){		
					while($row = $result->fetch_assoc()) {
						$url = $row['bookmark_url'];
						$name = $row['name'];
						echo '<li><a href ="'.$url.'" target="_blank">'.$name.'</a></li> <hr>';
					}
				}else{
					echo "no bookmarks!";
				}
				?>
		</ul>
	</div>



    
	

</body>
</html>