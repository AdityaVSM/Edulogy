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
                <h1>C Compilation Process</h1> <br><br>     

            
                <h3>What is a Compilation?</h3>  <br>
                <p>
                    The compilation is a process of converting the source code into object code. It is done with the help of the compiler. The compiler checks the source code for the syntactical or structural errors, and if the source code is error-free, then it generates the object code. <br><br> <br>
                    <img src="ss1.png" alt=""> <br><br>
                </p> 
                <p>
                The c compilation process converts the source code taken as input into the object code or machine code. The compilation process can be divided into four steps, i.e., Pre-processing, Compiling, Assembling, and Linking.
                </p>
                <p>
                The preprocessor takes the source code as an input, and it removes all the comments from the source code. The preprocessor takes the preprocessor directive and interprets it. For example, if <em>&ltstdio.h&gt</em>, the directive is available in the program, then the preprocessor interprets the directive and replace this directive with the content of the <em>'stdio.h'</em> file.
                </p> <br> <br><br>
                <p>
                The following are the phases through which our program passes before being transformed into an executable form:
                <ul>
                    <li>Preprocessor</li>
                    <li>Compiler</li>
                    <li>Assembler</li>
                    <li>Linker</li>
                </ul>
                <img src="ss2.png" alt=""> <br><br>
                <ol>
                    <li>
                        <h4>Preprocessor</h4> 
                        <p>
                        The source code is the code which is written in a text editor and the source code file is given an extension ".c". This source code is first passed to the preprocessor, and then the preprocessor expands this code. After expanding the code, the expanded code is passed to the compiler.
                        </p> <br><br>
                    </li>
                    <li>
                        <h4>Compiler:</h4>
                        <p>
                        The code which is expanded by the preprocessor is passed to the compiler. The compiler converts this code into assembly code. Or we can say that the C compiler converts the pre-processed code into assembly code.
                        </p>
                    </li> <br><br>
                    <li>
                        <h4>Assembler:</h4>
                        <p>
                        The assembly code is converted into object code by using an assembler. The name of the object file generated by the assembler is the same as the source file. The extension of the object file in DOS is <strong>'.obj,'</strong> and in UNIX, the extension is <strong>'o'</strong>. If the name of the source file is <em>'hello.c'</em>, then the name of the object file would be <em>'hello.obj'</em>.
                        </p>
                    </li><br><br>
                    <li> 
                        <h4>Linker:</h4>
                        <p>
                        Mainly, all the programs written in C use library functions. These library functions are pre-compiled, and the object code of these library files is stored with <strong>'.lib'</strong> (or '.a') extension. The main working of the linker is to combine the object code of library files with the object code of our program. Sometimes the situation arises when our program refers to the functions defined in other files; then linker plays a very important role in this. It links the object code of these files to our program. Therefore, we conclude that the job of the linker is to link the object code of our program with the object code of the library files and other files. The output of the linker is the executable file. The name of the executable file is the same as the source file but differs only in their extensions. In DOS, the extension of the executable file is <strong>'.exe'</strong>, and in UNIX, the executable file can be named as <em>'a.out'</em>. For example, if we are using <em>printf()</em> function in a program, then the linker adds its associated code in an output file.
                        </p>
                    </li> <br><br>
                </ol>
                </p>
                
                
                

            </p>
            </div>
        </div>
        <hr>
        
        <a href="csyntax.php" target="_blank"><button type="button" class="prev btn btn-primary btn-lg"> << Prev(C syntax)</button></a>

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