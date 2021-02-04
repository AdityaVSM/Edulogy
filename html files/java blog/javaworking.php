
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
                    <h1>How Java code works</h1> <br><br>
                    <h4>What happens at compile time?</h4> <br>
                    <p> 
                        At compile time, java file is compiled by Java <em> Compiler </em>(It does not interact with OS) and converts the java code into <em>bytecode.</em> <br><br>
                        <img src="compile.png" alt="">
                    </p> <br><br>
                    <h4> What happens at runtime?</h4> <br>
                    <p>
                        At runtime following process is executed: <br><br>
                        <img src="runtime.png" alt=""> <br>
                        <div class="note">
                            <strong>Classloader:</strong> is the subsystem of <em>JVM</em> that is used to load class files. <br><br>
                            <strong>Bytecode Verifier:</strong> checks the code fragments for illegal code that can violate access right to objects. <br><br>
                            <strong>Interpreter:</strong> read bytecode stream then execute the instructions. 
                        </div>

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