<?php
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bgdark5">
        <nav class="navbar navbar-light bg-dark justify-content-between" >
            <a style="color:white" class="navbar-brand" href="index.php">Home</a>
            <a style="color:white" class="navbar-brand" href="signup.php">Sign Up</a>
            <a style="color:white" class="navbar-brand" href="login.php">Login</a>
            <a style="color:white" class="navbar-brand" href="logout.php">Logout</a>
            <a style="color:white" class="navbar-brand" href="profile.php">View profile</a>
            <a style="color:white" class="navbar-brand" href="news.php" target="_blank">News</a>
            <a style="color:white" class="navbar-brand" href="bookmark.php" target="_blank">Bookmarks</a>
            <a style="color:white" class="navbar-brand" href="teams.php" target="_blank">Team</a>
            

        </nav>
		<br><br>
    <div class="container my-5 p-5 z-depth-1 bgdark1">

        <style>
            body{
                background-image: url("images/login-signup-bg.jpg");
                opacity:0.8;
            }
            .w-200 {
                width: 200px;
            }
            
            .bgdark1 {
                background-color: #190320;
                color: #ddd;
                border: 0.1px solid #bc17f3;
            }
            
            .bgdark2 {
                color: #eec6fc;
            }
            
            .clwhite2 {
                color: #f1dff8;
            }
            
            .text-muted {
                color: #aea5b1 !important;
            }
            
            .yellow-text a{
                color: #f09dac !important;
            }
            
            .bgdark5 {
                background-color: #0b010e;
            }

            .row{
                position: relative;
                left:180px;
            }
        </style>

  
        <section class="team-section text-center bgdark2 ">

            <h4 class="font-weight-bold text-center clwhite1 text-uppercase small mb-5">Team Edulogy</h4>
            <h2 class="font-weight-bold text-center clwhite2 pb-2">Our Amazing Team</h2>
            <hr class="w-header my-4">

            <div class="row">
                <div class="col-md-4 mb-4">

                    <div class="w-200 mx-auto mb-4">
                        <img src="aditya3.jpg" class="z-depth-1 rounded-circle img-fluid" alt="smaple image">
                    </div>
                    <h6 class="font-weight-bold">Aditya VSM</h6>
                    <small class="text-muted">Android Developer</small>
                    <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 yellow-text">
                        <li><a href="https://twitter.com/VsmAditya" target="_blank"><i class="fab fa-twitter mx-2"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/aditya-vsm-9ba29a1b2/" target="_blank"><i class="fab fa-linkedin-in mx-2"></i></a></li>
                        <li><a href="https://github.com/AdityaVSM" target="_blank"><i class="fab fa-github mx-2"></i></i></a></li>
                    </ul>

                </div>
                <!-- Grid column -->
                <div class="col-md-4 mb-4">

                    <div class="w-200 mx-auto mb-4">
                        <img src="akash.jpeg" class="z-depth-1 rounded-circle img-fluid mx-auto" alt="smaple image">
                    </div>
                    <h6 class="font-weight-bold">Akash Ashok Sangnure</h6>
                    <small class="text-muted">Front-End Designer</small>
                    <ul class="list-unstyled d-flex justify-content-center mt-3 mb-0 yellow-text">
                        <li><a href=""><i class="fab fa-twitter mx-2"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in mx-2"></i></a></li>
                        <li><a href=""><i class="fab fa-github mx-2"></i></i></a></li>
                    </ul>

                </div>
            </div>

        </section>


    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>

</html>