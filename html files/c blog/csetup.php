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
            <p>
                <h1>Environment setup</h1> <br><br> 

            <form method="POST" onsubmit="saved(event)">
                <input type="submit" class="save btn btn-primary" value="Save for later"></button>
            </form>

            <script type="text/javascript">
            function saved(event){     
                event.preventDefault();                 
                <?php
                    $name = "C Environment setup";
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
                    To start using C, you need two things:
                    <ul>
                        <li>A <strong>text editor</strong>, like Notepad, to write C code</li>
                        <li>A <strong>compiler</strong>, like G++, to translate the C code into a language that the computer will understand</li>
                    </ul>
                    There are many text editors and compilers to choose from. In this tutorial, we will use an IDE (see below).                  
                </p> <br><br>    

                <h4>IDE installation</h4> <br>
                <p>
                    An <strong>IDE</strong> (Integrated Development Environment) is used to edit AND compile the code. <br><br>
                    Popular IDE's include Code::Blocks, Eclipse, and Visual Studio. These are all free, and they can be used to both edit and debug C++ code. <br><br>
                    Note: Web-based IDE's can work as well, but functionality is limited. <br><br>
                    We will use <strong> Code::Blocks </strong> in our tutorial, which we believe is a good place to start. <br><br>
                    You can find the latest version of Codeblocks at <span><a href="http://www.codeblocks.org/downloads/26">http://www.codeblocks.org/downloads/26</a></span>. Download the <strong> mingw-setup.exe </strong> file, which will install the text editor with a compiler. <br>
                </p> <br><br>

                <h4>Quickstart</h4> <br>
                <p>
                    Open Codeblocks and go to <em> File > New > Empty File. </em><br>
                    Write the following C code and save the file as <strong> myfirstprogram.c </strong> <em>>(File > Save File as)</em>:
                </p>

                <div class="code-snippet">
                    <div class="code"> <br>
                        <h4>myfirstprogram.c</h4> 
                        <a href="http://tpcg.io/gCV3Dx8L" target="_blank"><input class="btn btn-secondary try_it "  type="button" value="Demo"></a> 
                        <script src="https://gist.github.com/AdityaVSM/351a5e85519bb6fae65f5f00439cc5db.js"></script> <br>                   <p>Then, go to <em>Build > Build and Run</em>  to run (execute) the program. The result will look something to this: <br><br></p>
                        <img src="../cpp blog/ss1.png" alt=""> <br><br> 
                    </div>
                </div> <br><br>

            </p>
            </div>
        </div>
        <hr>
        
        <a href="cblog.php" target="_blank"><button type="button" class="prev btn btn-primary btn-lg"> << Prev(C introduction)</button></a>
        <a href="csyntax.php" target="_blank"><button type="button" class="next btn btn-primary btn-lg">Next(C syntax)>></button></a>

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