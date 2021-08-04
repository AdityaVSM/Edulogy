<?php
    session_start();
	include("../../connection.php");
    include("../../functions.php");
    $user_data = check_login($con);
    $user_name = $user_data['user_name'];
    $id = $user_data['user_id'];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body >

        <nav class="navbar navbar-light bg-dark justify-content-between" >
            <a style="color:white" class="navbar-brand" href="../../index.php">Home</a>
            <a style="color:white" class="navbar-brand" href="../../signup.php">Sign Up</a>
            <a style="color:white" class="navbar-brand" href="../../login.php">Login</a>
            <a style="color:white" class="navbar-brand" href="../../logout.php">Logout</a>
            <a style="color:white" class="navbar-brand" href="../../profile.php">View profile</a>
            <a style="color:white" class="navbar-brand" href="../../news.php" target="_blank">News</a>
            <a style="color:white" class="navbar-brand" href="../../bookmark.php" target="_blank">Bookmarks</a>

        </nav>

        <img style = "height: 400px;width: 100%; padding:30px" src="pythonImage.png"  alt="css image">  
        <hr>

        <div class="grid-container">
            <div class="grid-child-sidebar" > <br> <br>
                
                <!-- dropdown -->
                <a href="../html blog/htmlblog.php">HTML</a> <br><br>        
                <a href="../css blog/cssblog.php">CSS</a> <br><br> 
                <a href="../cpp blog/cppblog.php">C++</a> <br><br>          
                <a href="../java blog/javablog.php">JAVA</a> <br><br>              
                <a href="../c blog/cblog.php">C</a> <br><br>
                <div class="dropdown">
                    <a href="pythonblog.php">PYTHON   </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="pythonsetup.php">Environment Setup</a><br>
                        <a href="pythonsyntax.php">Syntax</a> <br>
                    </div>
                </div><br>
            </div>

            
            <div class="grid-child-content">
            <p >
                <h1>PYTHON Environment Setup<h1> <br>

           
                
                <h3>Python Installation</h3> <br>
                <p>If you find that you do not have python installed on your computer, then you can download it for free from the following website: <a href=" https://www.python.org/" target="_blank"> https://www.python.org/</a></p> <br><br>
                
                <h3>Getting Started</h3> <br>
                <p>
                    Python is an interpreted programming language, this means that as a developer you write Python <em>(.py)</em> files in a text editor and then put those files into the python interpreter to be executed. <br>The way to run a python file is like this on the command line: <br>
                    <div class="code-snippet"> <br>
                        <img style="left:100px;" src="ss1.png" alt=""> <br><br>
                    </div> <br>
                    <p>
                    Where <em>"helloworld.py"</em> is the name of your python file. <br>
                    Let's write our first Python file, called helloworld.py, which can be done in any text editor. 
                    </p> 
                    <div class="code-snippet"> <br>
                        <h4>helloworld.py</h4> 
                        <a href="http://tpcg.io/WmNdhqZI" target="_blank"><input class="btn btn-secondary try_it"  type="submit" value="Demo"></a>
                        <script src="https://gist.github.com/AdityaVSM/bd6a7d302088aa327f15d6f2d5c1cfd4.js"></script> <br>
                    </div> <br>
                    <p>
                        Simple as that. Save your file. Open your command line, navigate to the directory where you saved your file, and run:
                        <div class="code-snippet"> <br>
                        <img style="left:100px;" src="ss2.png" alt=""> <br><br>
                        </div>
                    </p>
                    <p>
                        The output should read:
                        <div class="code-snippet"> <br> 
                            <img style="left:100px;" src="ss3.png" alt=""> <br><br>
                        </div>
                    </p>
                    
                </p>
                
            </p>
            </div>
        </div>
        <hr>

        <a href="pythonblog.php" target="_blank"><button type="button" class="prev btn btn-primary btn-lg"> << Prev(Python introduction)</button></a>
        <a href="pythonsyntax.php" target="_blank"><button type="button" class="next btn btn-primary btn-lg">Next(Python Syntax)>></button></a>

        <div class="container">
    <section style="height:80px;"></section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Courses</h3>
                        <ul>
							<li><a href="pythonsetup.php">Python Environment Setup</a></li>
                            <li><a href="pythonsyntax.php">Python Syntax</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Team</h3>
                        <ul>
                            <li><a href="#">Aditya VSM</a></li>
                            <li><a href="#">Akash Ashok Sangnure </a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Edulogy</h3>
                        <p>Edulogy is an online learning platform where you can learn computer science topics. We cover top programming laguages with short and clear explanations which even a beginner can understand.</p>
                    </div>
                    <div class="col item social">
						<a href="#"><i class="icon ion-social-facebook"></i></a>
						<a href="#"><i class="icon ion-social-twitter"></i></a>
						<a href="#"><i class="icon ion-social-snapchat"></i></a>
						<a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Edulogy © 2020</p>
            </div>
        </footer>
    </div>
    </body>
</html>