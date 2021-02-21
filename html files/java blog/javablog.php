<?php
    session_start();
	include("../../connection.php");
    include("../../functions.php");
    $user_data = check_login($con);
    $user_name = $user_data['user_name'];
    $id = $user_data['id'];

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
            <div class="grid-child-sidebar" > <br><br>
                
                <!-- dropdown -->
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
            <h1>JAVA Programming</h1><br><br>

            <form method="POST" onsubmit="saved(event)">
                <input type="submit" class="btn btn-primary" value="Save for later"></button>
            </form>

            <script type="text/javascript">
                function saved(event){     
                    event.preventDefault();                 
                    <?php
                        $name = "Java Introduction";
                        $query1 = "SELECT name FROM bokmark WHERE name='".$name."'";
                        $result2 = mysqli_query($con,$query1);

                        if(mysqli_num_rows($result2)==0 && $_SERVER['REQUEST_METHOD'] == "POST"){
                            $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
                            $query = "INSERT INTO bokmark(user_id, bookmark_url,name) VALUES('$id','$url','$name');";
                            mysqli_query($con,$query);
                            alert("Page saved successfully"); 	
                            header("Location: ../../bookmark.php");                                       
                        }else{
                            alert("Page already saved");
                        }                             
                    ?>
            </script> 
            
            <p>
                <strong>Java</strong> is a high-level programming language originally developed by <em>Sun Microsystems</em> and released in 1995. Java runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. This tutorial gives a complete understanding of Java. This reference will take you through simple and practical approaches while learning Java Programming language.
            </p>
            
            <div style="text-align: center;"><br><strong><h3>Why to Learn java Programming?</h3></strong><br></div>
            <p>
                Java is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Software Development Domain. I will list down some of the key advantages of learning Java Programming:
            <ul>
                <li><strong>Object Oriented</strong> − In Java, everything is an Object. Java can be easily extended since it is based on the Object model.</li> <br>
                <li><strong>Platform Independent</strong> − Unlike many other programming languages including C and C++, when Java is compiled, it is not compiled into platform specific machine, rather into platform independent byte code. This byte code is distributed over the web and interpreted by the <em>Virtual Machine (JVM)</em> on whichever platform it is being run on.</li> <br>
                <li><strong>Simple</strong>  − Java is designed to be easy to learn. If you understand the basic concept of OOP Java, it would be easy to master.</li><br>
                <li><strong>Secure</strong>  − With Java's secure feature it enables to develop virus-free, tamper-free systems. Authentication techniques are based on public-key encryption.</li> <br>
                <li><strong>Architecture-neutral</strong>  − Java compiler generates an architecture-neutral object file format, which makes the compiled code executable on many processors, with the presence of Java runtime system.</li> <br>
                <li><strong>Portable</strong>  − Being architecture-neutral and having no implementation dependent aspects of the specification makes Java portable. Compiler in Java is written in ANSI C with a clean portability boundary, which is a POSIX subset.</li> <br>
                <li><strong>Robust</strong>  − Java makes an effort to eliminate error prone situations by emphasizing mainly on compile time error checking and runtime checking.</li> <br>
            </ul>
            </p>

            <div style="text-align: center;"><br><strong><h3>Applications of Java Programming:</h3></strong><br></div>
            <p>
                The latest release of the Java Standard Edition is Java SE 8. With the advancement of Java and its widespread popularity, multiple configurations were built to suit various types of platforms. For example: J2EE for Enterprise Applications, J2ME for Mobile Applications.
                The new J2 versions were renamed as Java SE, Java EE, and Java ME respectively. Java is guaranteed to be Write Once, Run Anywhere.
            <ul>
                <li><strong>Multithreaded</strong> − With Java's multithreaded feature it is possible to write programs that can perform many tasks simultaneously. This design feature allows the developers to construct interactive applications that can run smoothly.</li> <br>
                <li><strong>Interpreted</strong> − Java byte code is translated on the fly to native machine instructions and is not stored anywhere. The development process is more rapid and analytical since the linking is an incremental and light-weight process.</li> <br>
                <li><strong>High Performance</strong> − With the use of Just-In-Time compilers, Java enables high performance.</li> <br>
                <li><strong>Distributed</strong> − Java is designed for the distributed environment of the internet.</li> <br>
                <li><strong>Dynamic</strong> − Java is considered to be more dynamic than C or C++ since it is designed to adapt to an evolving environment. Java programs can carry extensive amount of run-time information that can be used to verify and resolve accesses to objects on run-time.</li> <br>
            </ul>
            </p>
            
            </p>
            </div>
        </div>
        <hr>

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