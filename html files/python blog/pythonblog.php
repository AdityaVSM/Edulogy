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
            <h1>PYTHON Programming</h1> <br><br>

        
                
            <p><strong>Python</strong> is a general-purpose interpreted, interactive, object-oriented, and high-level programming language. It was created by <em>Guido van Rossum</em> during 1985- 1990. Like Perl, Python source code is also available under the GNU General Public License (GPL). This tutorial gives enough understanding on Python programming language.</p>
            
            <div><br><strong><h3>Why to Learn Python?</h3></strong><br></div>
            <p>Python is a high-level, interpreted, interactive and object-oriented scripting language. Python is designed to be highly readable. It uses English keywords frequently where as other languages use punctuation, and it has fewer syntactical constructions than other languages.
            Python is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning Python: <br><br>
            <ul>
            <li><strong>Python is Interpreted</strong> − Python is processed at runtime by the interpreter. You do not need to compile your program before executing it. This is similar to PERL and PHP.</li> <br>
            <li><strong>Python is Interactive</strong> − You can actually sit at a Python prompt and interact with the interpreter directly to write your programs.</li> <br>
            <li><strong>Python is Object-Oriented</strong> − Python supports Object-Oriented style or technique of programming that encapsulates code within objects.</li><br>
            <li><strong>Python is a Beginner's Language</strong> − Python is a great language for the beginner-level programmers and supports the development of a wide range of applications from simple text processing to WWW browsers to games.</li>
            </ul>
            </p> 
            
            <div><br><strong><h3>Characteristics of Python:</h3></strong><br></div>
            <p>Following are important characteristics of Python Programming − <br>
            <ul>
                <li>It supports functional and structured programming methods as well as OOP.</li> <br>
                <li>It can be used as a scripting language or can be compiled to byte-code for building large applications.</li> <br>
                <li>It provides very high-level dynamic data types and supports dynamic type checking.</li> <br>
                <li>It supports automatic garbage collection.</li> <br>
                <li>It can be easily integrated with C, C++, COM, ActiveX, CORBA, and Java.</li> <br>
            </ul></p> 
            
            <div><br><strong><h3>Applications of Python:</h3></strong><br></div>
            <p>As mentioned before, Python is one of the most widely used language over the web. I'm going to list few of them here:
            <ul>
                <li><strong>Easy-to-learn</strong> − Python has few keywords, simple structure, and a clearly defined syntax. This allows the student to pick up the language quickly.</li> <br>
                <li><strong>Easy-to-read</strong> − Python code is more clearly defined and visible to the eyes.</li> <br>
                <li><strong>Easy-to-maintain</strong> − Python's source code is fairly easy-to-maintain.</li> <br>
                <li><strong>A broad standard library</strong> − Python's bulk of the library is very portable and cross-platform compatible on UNIX, Windows, and Macintosh.</li> <br>
                <li><strong>Interactive Mode</strong> − Python has support for an interactive mode which allows interactive testing and debugging of snippets of code.</li> <br>
                <li><strong>Portable</strong>− Python can run on a wide variety of hardware platforms and has the same interface on all platforms.</li> <br>
                <li><strong>Extendable</strong> − You can add low-level modules to the Python interpreter. These modules enable programmers to add to or customize their tools to be more efficient.</li> <br>
                <li><strong>Databases</strong> − Python provides interfaces to all major commercial databases.</li> <br>
                <li><strong>GUI Programming</strong> − Python supports GUI applications that can be created and ported to many system calls, libraries and windows systems, such as Windows MFC, Macintosh, and the X Window system of Unix.</li> <br>
                <li><strong>Scalable</strong> − Python provides a better structure and support for large programs than shell scripting.</li> <br>
            </ul>
            </p>
            </p>
            </div>
        </div>
        <hr>

        <a href="pythonsetup.php" target="_blank"><button type="button" class="next btn btn-primary btn-lg">Next(Python environment setup)>></button></a>

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