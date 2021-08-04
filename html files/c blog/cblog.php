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

        <img style = "height: 400px;width: 100%; padding:30px" src="cImage.png"  alt="css image">  
        <hr>
        
        <div class="grid-container">
            <div class="grid-child-sidebar" > <br><br>
            
                <!-- dropdown -->
                <a href="../html blog/htmlblog.php">HTML</a> <br><br>        
                <a href="../css blog/cssblog.php">CSS</a> <br><br> 
                <a href="../cpp blog/cppblog.php">C++</a> <br><br>          
                <a href="../java blog/javablog.php">JAVA</a> <br><br>             
                <div class="dropdown">
                    <a href="cblog.php">C   </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="csetup.php">Environment setup</a><br>
                        <a href="csyntax.php">Syntax</a> <br>
                        <a href="cworking.php">How it works</a> <br>
                    </div>
                </div><br> 
                <a href="../python blog/pythonblog.php">PYTHON</a> <br><br>
            </div>


            <div class="grid-child-content">
            <p >
            <h1>C Programming</h1> <br><br> 
                  
            <p>
                C programming is a general-purpose, procedural, imperative computer programming language developed in 1972 by <em> Dennis M. Ritchie</em> at the Bell Telephone Laboratories to develop the UNIX operating system. C is the most widely used computer language. It keeps fluctuating at number one scale of popularity along with Java programming language, which is also equally popular and most widely used among modern software programmers.
            </p>
            
            <div><br><strong><h3>Why to Learn C Programming?</h3></strong><br></div>
            <p>C programming language is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Software Development Domain. I will list down some of the key advantages of learning C Programming:
            <ul>
                <li>Easy to learn</li>
                <li>Structured language</li>
                <li>It produces efficient programs</li>
                <li>It can handle low-level activities</li>
                <li>It can be compiled on a variety of computer platforms</li>
            </ul>
            </p>

            <div ><br><strong><h3>Facts about C</h3></strong><br></div>
            <p>
            <ul>
                <li>C was invented to write an operating system called UNIX.</li>
                <li>C is a successor of B language which was introduced around the early 1970s.</li>
                <li>The language was formalized in 1988 by the American National Standard Institute (ANSI).</li>
                <li>The UNIX OS was totally written in C.</li>
                <li>Today C is the most widely used and popular System Programming Language.</li>
                <li>Most of the state-of-the-art software have been implemented using C.</li>            
            </ul></p>

            <div><br><strong><h3>Applications of C Programming</h3></strong><br></div>
            <p>C was initially used for system development work, particularly the programs that make-up the operating system. C was adopted as a system development language because it produces code that runs nearly as fast as the code written in assembly language. Some examples of the use of C are -
            <ul>
                <li>Operating Systems
                <li>Language Compilers
                <li>Assemblers
                <li>Text Editors
                <li>Print Spoolers
                <li>Network Drivers
                <li>Modern Programs
                <li>Databases
                <li>Language Interpreters
                <li>Utilities
            </ul>    
            </p>
                          
            </p>
            </div>
        </div>
        <hr>
        
        <a href="csetup.php" target="_blank"><button type="button" class="next btn btn-primary btn-lg">Next(C environment setup)>></button></a>

        <div class="container">
            <section style="height:80px;"></section>
            <div class="footer-dark">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 item">
                                <h3>Courses</h3>
                                <ul>
                                    <li><a href="cblog.php">C basics</a></li>
                                    <li><a href="csetup.php">C Environment Setup</a></li>
                                    <li><a href="csyntax.php">C syntax</a></li>
                                    <li><a href="cworking.php">C compilation Process</a></li>
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
        </div>
        
    </body>
</html>