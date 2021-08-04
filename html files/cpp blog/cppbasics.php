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
            

        </nav>

        <img style = "height: 400px;width: 100%; padding:30px" src="cppImage.png"  alt="css image">  
        <hr>

        <div class="grid-container">
            <div class="grid-child-sidebar" > <br><br>
                
                <!-- dropdown -->  
                <a href="../html blog/htmlblog.php">HTML</a> <br><br>        
                <a href="../css blog/cssblog.php">CSS</a> <br><br> 
                <div class="dropdown">
                    <a href="cppblog.php">C++    </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="cppbasics.php">Basics</a><br>
                        <a href="cppsetup.php">Environment setup</a> <br>
                        <a href="cppsyntax.php">Syntax</a> <br>
                    </div>
                </div><br>            
                <a href="../java blog/javablog.php">JAVA</a> <br><br>             
                <a href="../c blog/cblog.php">C </a> <br><br>
                <a href="../python blog/pythonblog.php">PYTHON</a> <br><br>
            </div>

            <div class="grid-child-content">
                <p>
                    <h1>C++ Basics</h1> <br><br>

            
                    <p>
                        C++ is a statically typed, compiled, general-purpose, case-sensitive, free-form programming language that supports procedural, object-oriented, and generic programming.
                    </p>
                    <p>
                        C++ is regarded as a middle-level language, as it comprises a combination of both high-level and low-level language features.
                    </p>
                    <p>
                        C++ was developed by Bjarne Stroustrup starting in 1979 at Bell Labs in Murray Hill, New Jersey, as an enhancement to the C language and originally named C with Classes but later it was renamed C++ in 1983.
                    </p>
                    <p>
                        C++ is a superset of C, and that virtually any legal C program is a legal C++ program.
                    </p>
                    <p>
                        <div class="note">
                            <strong>Note</strong> − A programming language is said to use static typing when type checking is performed during compile-time as opposed to run-time.  
                        </div>
                    </p> <br><br>

                    <h4 style="text-indent:3em;">Object-Oriented Programming</h4>
                    C++ fully supports object-oriented programming, including the four pillars of object-oriented development −
                    <ul>
                        <li>Encapsulation</li>
                        <li>Abstraction</li>
                        <li>Inheritance</li>
                        <li>Polymorphism</li>
                    </ul> <br>

                    <h4 style="text-indent:3em;"> Standard libraries (STL)</h4>
                    Standard C++ consists of three important parts −
                    <ul>
                        <li>The core language giving all the building blocks including variables, data types and literals, etc.</li>
                        <li>The C++ Standard Library giving a rich set of functions manipulating files, strings, etc.</li>
                        <li>The Standard Template Library (STL) giving a rich set of methods manipulating data structures, etc</li>
                    </ul> <br>

                    <h4 style="text-indent:3em;"> The ANSI Standard </h4>
                    <p style="text-indent:2em;">
                        The ANSI standard is an attempt to ensure that C++ is portable; that code you write for Microsoft's compiler will compile without errors, using a compiler on a Mac, UNIX, a Windows box, or an Alpha.
                    </p>
                    <p style="text-indent:2em;">
                        The ANSI standard has been stable for a while, and all the major C++ compiler manufacturers support the ANSI standard.                  
                    </p>
                </p>
            </div>
        
        </div>
        <hr>

        <a href="cppblog.php" target="_blank"><button type="button" class="prev btn btn-primary btn-lg"> << Prev(C++ introduction)</button></a>
        <a href="cppsetup.php" target="_blank"><button type="button" class="next btn btn-primary btn-lg">Next(C++environment setup)>></button></a>

        <div class="container">
    <section style="height:80px;"></section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Courses</h3>
                        <ul>
							<li> <a href="cppbasics.php">C++ Basics</a> </li>
                            <li> <a href="cppsetup.php">C++ Environment setup</a> </li>
                            <li><a href="cppsyntax.php">C++ Syntax</a></li>
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