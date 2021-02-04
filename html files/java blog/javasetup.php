
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
                <a href="../html blog/htmlblog.php">HTML</a> <br><br>        
                <a href="../css blog/cssblog.php">CSS</a> <br><br> 
                <a href="../cpp blog/cppblog.php">C++</a> <br><br>          
                <div class="dropdown">
                    <a href="javablog.php">JAVA   </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="javasetup.php">Environment setup</a><br>
                    </div>
                </div><br>              
                <a href="../c blog/cblog.php">C</a> <br><br>
                <a href="../python blog/pythonblog.php">PYTHON</a> <br><br>
            </div>

            <div class="grid-child-content">
                <p >
                    <h1 style="text-align: center; color:blue; text-decoration:underline; text-shadow:3px 1px yellow; ">JAVA Getting Started</h1> <br><br>
                    <p>
                        If you do not have Java installed on your computer, you can download it for free at <a href="https://www.oracle.com/java/technologies/java-se-glance.html" target="_blank">oracle.com.</a>
                    </p> <br>
                    <h3>Setup for windows:</h3> <br>
                    <p>
                        To install Java on Windows:
                        <ul>
                            <li>Go to <strong> "System Properties" </strong> (Can be found on<em> Control Panel > System and Security > System > Advanced System Settings</em>)</li> <br>
                            <li>Click on the <strong> "Environment variables" </strong> button under the <strong> "Advanced" </strong> tab</li> <br>
                            <li>Then, select the <strong> "Path" </strong> variable in System variables and click on the <strong> "Edit" </strong> button</li> <br>
                            <li>Click on the <strong> "New" </strong> button and add the path where Java is installed, followed by <strong> \bin </strong>. By default, Java is installed in <em> C:\Program Files\Java\jdk-11.0.1 </em> (If nothing else was specified when you installed it). In that case, You will have to add a new path with: <em> C:\Program Files\Java\jdk-11.0.1\bin </em></li> <br>
                            <li>Then, click <strong> "OK" </strong>, and save the settings</li> <br>
                            <li>At last, open Command Prompt (cmd.exe) and type <strong> java -version </strong> to see if Java is running on your machine</li> <br>
                            <li>Intsall any IDE you like such as <strong>IntelliJ</strong>, <strong>VSCode</strong>, <strong> Netbeans</strong> or <strong> Eclipse </strong>.</li>
                        </ul>
                    </p> <br>

                    <h3>Quickstart:</h3> <br>
                    <p>
                    In Java, every application begins with a class name, and that class must match the filename. <br>
                    Let's create our first Java file, called <strong> Main.java </strong>, which can be done in any text editor (like Notepad). <br>
                    The file should contain a <strong> "Hello World"</strong> message, which is written with the following code:
                    </p>
                    <div class="code-snippet">
                        <div class="code">
                            <br><h4>Main.java</h4>
                            <a href="http://tpcg.io/mPHHjZwJ" target="_blank"><input class="hvr-rectangle-out try_it"  type="button" value="Demo"></a>
                            <script src="https://gist.github.com/AdityaVSM/10ee1973724a19d64fa5138826336fcd.js"></script> <br>
                        </div>
                    </div> <br>

                    <p>
                        If you wrote the code in text editor rather than IDE's follow the below procedure to execute program in command prompt:
                        <ul>
                            <li>Save the code in Notepad as<strong> "Main.java"</strong>. Open Command Prompt (cmd.exe), navigate to the directory where you saved your file, and type <strong>"javac Main.java"</strong>:</li> <br>
                            <li>This will compile your code. If there are no errors in the code, the command prompt will take you to the next line. Now, type <strong>"java Main"</strong> to run the file:</li> <br>
                            <li>The output should read:   <strong>Hello world</strong></li> <br>
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