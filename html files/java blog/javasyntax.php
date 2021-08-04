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

        <img style = "height: 400px;width: 100%; padding:30px" src="javaImage.png"  alt="css image">  
        <hr>

        <div class="grid-container">
            <div class="grid-child-sidebar" >
                
                <!-- dropdown -->
                <br><br>
                <a href="../html blog/htmlblog.php">HTML</a> <br><br>        
                <a href="../css blog/cssblog.php">CSS</a> <br><br> 
                <a href="../cpp blog/cppblog.php">C++</a> <br><br>          
                <div class="dropdown">
                    <a href="javablog.php">JAVA   </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="javasetup.php">Environment setup</a><br>
                        <a href="javasyntax.php">Syntax</a> <br>
                        <a href="javaworking.php">How it works</a> <br>
                    </div>
                </div><br>              
                <a href="../c blog/cblog.php">C</a> <br><br>
                <a href="../python blog/pythonblog.php">PYTHON</a> <br><br>
            </div>

            <div class="grid-child-content">
                <p >
                    <h1>JAVA Syntax</h1> <br><br>

           
                    <p>
                        Let us breakdown the following code to understand syntax of Java :
                    </p> 
                    <div class="code-snippet">
                        <div class="code"> <br>
                            <h4>Example:</h4>
                            <a href="http://tpcg.io/mPHHjZwJ" target="_blank"><input class="btn btn-secondary try_it"  type="button" value="Demo"></a>
                            <script src="https://gist.github.com/AdityaVSM/10ee1973724a19d64fa5138826336fcd.js"></script> <br>
                        </div>
                    </div> <br>
                    <h4>Example explained:</h4> <br>
                    <p>
                        Every line of code that runs in Java must be inside a <em>class</em>. In our example, we named the class <strong>Main</strong>. A class should always start with an uppercase first letter. <br> <br>
                        <strong>Note: </strong>Java is case-sensitive: <strong> "MyClass"</strong> and <strong> "myclass" </strong> has different meaning. <br> <br>
                        The name of the java file must match the class name. When saving the file, save it using the class name and add <em>".java"</em> to the end of the filename. To run the example above on your computer, make sure that Java is properly installed. 
                    </p> <br><br>
                    <h4>The main method:</h4> <br>
                    <p>
                        The <em>main()</em> method is required and you will see it in every Java program: <br> <br>
                        Any code inside the <em> main()</em> method will be executed <br> <br>
                        Every Java program has a <em>class</em> name which must match the filename, and that every program must contain the <em>main()</em> method.
                    </p> <br><br>
                    <h4>System.out.println()</h4> <br>
                    <p>
                        Inside the <em> main() </em> method, we can use the <em>println()</em> method to print a line of text to the screen: <br> <br> <br>
                        <div class="note">
                            <strong>Note:</strong> The curly braces <em> {} </em>marks the beginning and the end of a block of code.  <br><br>
                            <strong>Note:</strong> Each code statement must end with a semicolon.
                        </div>
                        
                    </p>

                    

                </p>
            </div>
        </div>
        <hr>

        <a href="javasetup.php" target="_blank"><button type="button" class="prev btn btn-primary btn-lg"> << Prev(Java environment setup)</button></a>
        <a href="javaworking.php" target="_blank"><button type="button" class="next btn btn-primary btn-lg">Next(Java working)>></button></a>

        <div class="container">
    <section style="height:80px;"></section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Courses</h3>
                        <ul>
                            <li><a href="javasetup.php">Java Environment setup</a></li>
                            <li><a href="javasyntax.php">Java Syntax</a></li>
                            <li><a href="javaworking.php">Java How it works</a></li>
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