
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
        <link href="../../hover.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="../../style.css" media="all">
    </head>
    <body >

        <nav class="navbar navbar-light bg-dark justify-content-between" >
            <a style="color:white" class="navbar-brand" href="../../index.php">Home</a>
            <a style="color:white" class="navbar-brand" href="../../signup.php">Sign Up</a>
            <a style="color:white" class="navbar-brand" href="../../login.php">Login</a>
            <a style="color:white" class="navbar-brand" href="../../logout.php">Logout</a>
            <a style="color:white" class="navbar-brand" href="../../profile.php">View profile</a>
            
        </nav>

        <img style = "height: 400px;width: 100%; padding:30px" src="cppImage.png"  alt="css image">  
        <hr>

        <div class="grid-container">
            <div class="grid-child-sidebar" >
                
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
                    <h1>C++ Environment setup</h1> <br><br>
                    <p style="text-indent: 2em;">
                        To start using C++, you need two things:
                        <ul>
                            <li>A <strong>text editor</strong>, like Notepad, to write C++ code</li>
                            <li>A <strong>compiler</strong>, like GCC, to translate the C++ code into a language that the computer will understand</li>
                        </ul>
                        There are many text editors and compilers to choose from. In this tutorial, we will use an IDE (see below).                  
                    </p> <br><br>

                    <h4>IDE installation</h4>
                    <p>
                    An <strong>IDE</strong> (Integrated Development Environment) is used to edit AND compile the code. <br><br>
                    Popular IDE's include Code::Blocks, Eclipse, and Visual Studio. These are all free, and they can be used to both edit and debug C++ code. <br><br>
                    Note: Web-based IDE's can work as well, but functionality is limited. <br><br>
                    We will use <strong> Code::Blocks </strong> in our tutorial, which we believe is a good place to start. <br><br>
                    You can find the latest version of Codeblocks at <span><a href="http://www.codeblocks.org/downloads/26">http://www.codeblocks.org/downloads/26</a></span>. Download the <strong> mingw-setup.exe </strong> file, which will install the text editor with a compiler. <br>
                    </p> <br><br>

                    <h4>Quickstart</h4> 
                    <p>
                    Open Codeblocks and go to <strong> File > New > Empty File. </strong><br>
                    Write the following C++ code and save the file as <strong> myfirstprogram.cpp </strong> <em>>(File > Save File as)</em>:
                    </p>

                    <div class="code-snippet">
                        <div class="code"> <br>
                            <h4>myfirstprogram.cpp</h4> 
                            <a href="http://tpcg.io/6meiGNE0" target="_blank"><input class="hvr-rectangle-out try_it"  type="button" value="Demo"></a> 
                            <script src="https://gist.github.com/AdityaVSM/df943d28542801384fa3222fe65e6e5a.js"></script> <br>
                            Then, go to <em>Build > Build and Run</em>  to run (execute) the program. The result will look something to this: <br><br>
                            <img src="ss1.png" alt=""> <br><br> 
                        </div>
                    </div> <br><br>
                    
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