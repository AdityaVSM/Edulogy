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
            <a style="color:white" class="navbar-brand" href="../../news.php" target="_blank">News</a>
            <a style="color:white" class="navbar-brand" href="../../bookmark.php" target="_blank">Bookmarks</a>

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
                    <h1>C++ Syntax</h1> <br><br>

                    <form method="POST" onsubmit="saved(event)">
                        <input type="submit" class="save btn btn-primary" value="Save for later"></button>
                    </form>

                    <script type="text/javascript">
                        function saved(event){     
                            event.preventDefault();                 
                            <?php
                                $name = "C++ Syntax";
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
                            
                    <h6 style="text-indent:2em;">Let us break following code for better understanding-</h6> 
                    <div class="code-snippet">
                        <div class="code">
                            <br> <h4>Example-</h4>
                            <a href="http://tpcg.io/6meiGNE0" target="_blank"><input class="btn btn-secondary try_it"  type="button" value="Demo"></a> 
                            <script src="https://gist.github.com/AdityaVSM/bda4ce790b5db8c07707bc4ed10ad444.js"></script> <br>
                        </div>
                    </div>     <br><br>

                    <h3>Example explained-</h3> <br>
                    <ul>
                        <li>
                            <strong> Line 1 : </strong> <em>#include <iostream></em> is a <strong>header file library</strong>that lets us work with input and output objects, such as cout (used in line 5). Header files add functionality to C++ programs.
                        </li> <br>
                        <li>
                            <strong> Line 2 : </strong> <em>using namespace std</em> means that we can use names for objects and variables from the standard library.
                        </li> <br>
                        <li>
                            <strong> Line 3 : </strong> A blank line. C++ ignores white space.
                        </li> <br>
                        <li>
                            <strong> Line 4 : </strong> Another thing that always appear in a C++ program, is <em> int main() </em>.  This is called a <strong>function</strong>. Any code inside its curly brackets <em>{}</em> will be executed.
                        </li> <br>
                        <li>
                            <strong> Line 5 : </strong> <em>cout</em> is an <strong> object </strong> used together with the insertion operator (<<) to output/print text. In our example it will output "Hello World".
                        </li> <br>
                        <li>
                            <strong> Line 6 : </strong> <em>return 0</em> ends the main function.
                        </li> <br>
                        <li>
                            <strong> Line 7 : </strong> Do not forget to add the closing curly bracket <em>}</em> to actually end the main function.
                        </li>
                    </ul>  
                    <p>
                        <strong> Note: </strong> The body of <em>int main()</em> could also been written as: <br>
                        <pre>
                        <em>int main () { cout << "Hello World! "; return 0; }</em>                        
                        </pre>                                        
                    </p> 

                    <h3>Omitting namespace</h3> <br>
                    <p>
                        You might see some C++ programs that runs without the standard namespace library. The <em>using namespace std</em> line can be omitted and replaced with the <em>std</em> keyword, followed by the <em>::</em> operator for some objects:
                    </p>   
                    
                    <div class="code-snippet">
                        <div class="code"> <br>
                            <h4>Example-</h4>
                            <a href="http://tpcg.io/oHItjQoH" target="_blank"><input class="btn btn-secondary try_it"  type="button" value="Demo"></a>
                            <script src="https://gist.github.com/AdityaVSM/6e3180217a7ca94ad91e051ceec28351.js"></script> <br>
                        </div>
                    </div>
                </p>
            </div>
        
        </div>
        <hr>
        
        <a href="cpp setup.php" target="_blank"><button type="button" class="prev btn btn-primary btn-lg"> << Prev(C++ environment setup)</button></a>
        
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