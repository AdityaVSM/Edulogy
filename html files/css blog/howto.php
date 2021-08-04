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

        <img style = "height: 400px;width: 100%; padding:30px" src="cssImage.png"  alt="css image">  
        <hr>

        <div class="grid-container">
            <div class="grid-child-sidebar" > <br><br>
                
                <a href="../html blog/htmlblog.php">HTML</a> <br><br>  
                <div class="dropdown">
                    <a href="cssblog.php">CSS    </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="csssyntax.php">Syntax</a><br>
                        <a href="selectors.php">Selectors</a><br>
                        <a href="howto.php">How to add CSS</a><br>
                        <a href="munits.php">CSS Measurement units</a><br>
                    </div>
                </div><br>         
                <a href="../cpp blog/cppblog.php">C++</a> <br><br>             
                <a href="../java blog/javablog.php">JAVA</a> <br><br>             
                <a href="../c blog/cblog.php">C </a> <br><br>
                <a href="../python blog/pythonblog.php">PYTHON</a> <br><br>
            </div>

            <div class="grid-child-content">
            <p >
                <h1>How to add CSS</h1> <br><br>

            
                <p style="text-indent: 2em;">
                    CSS is added to HTML pages to format the document according to information in the style sheet. There are three ways to insert CSS in HTML documents.              
                </p>
                <ul>
                    <li>Inline CSS</li>
                    <li>Internal CSS</li>
                    <li>External CSS</li>
                </ul> <br><br>

                <ol>
                    <li>
                        <h4 style="text-indent :3em;">Inline CSS</h4>
                        <p>An inline style may be used to apply a unique style for a single element. <br>
                        To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.</p>
                        <div class="code-snippet">
                            <div class="code"> <br>
                                <h4>Example:</h4> <br>
                                <p>Inline styles are defined within the "style" attribute of the relevant element: <br></pp>
                                <a href="http://tpcg.io/c7sSydOm" target="_blank"><input class="btn btn-secondary try_it"  type="submit" value="Demo"></a>
                                <script src="https://gist.github.com/AdityaVSM/95c6d39a066f181985585d4af8edf868.js"></script> <br>
                            </div>
                        </div> 
                    </li><br><br>

                    <li>
                        <h4 style="text-indent :3em;">Internal CSS</h4>
                        <p>An internal style sheet may be used if one single HTML page has a unique style.<br>
                        The internal style is defined inside the <em>&ltstyle&gt</em> element, inside the head section.<p>
                        <div class="code-snippet">
                            <div class="code"><br>
                                <h4>Example:</h4> <br>
                                <p>Internal styles are defined within the <em>&ltstyle&gt</em> element, inside the <em>&lthead&gt</em> section of an HTML page: <br></p>
                                <a href="http://tpcg.io/57YyrTaX" target="_blank"><input class="btn btn-secondary try_it"  type="submit" value="Demo"></a>
                                <script src="https://gist.github.com/AdityaVSM/af88c007da849cd114f981c2f98406de.js"></script><br>
                            </div>
                        </div> 
                    </li><br><br>

                    <li>
                        <h4 style="text-indent :3em;">External CSS</h4>
                        <p>External CSS is used to apply CSS on multiple pages or all pages. Here, we write all the CSS code in a css file. <br>
                        Each HTML page must include a reference to the external style sheet file inside the <em>&ltlink&gt</em> element, inside the head section.</p>
                        <div class="code-snippet">
                            <div class="code"><br>
                                <h4>Example:</h4> <br>
                                <p>External styles are defined within the <em>&ltlink&gt</em> element, inside the <em>&lthead&gt</em>section of an HTML page: <br></p>
                                <a href="http://tpcg.io/57YyrTaX" target="_blank"><input class="btn btn-secondary try_it"  type="submit" value="Demo"></a>
                                <script src="https://gist.github.com/AdityaVSM/5294f31c8fefb19224f275b8382a20e9.js"></script> <br>
                            </div>
                        </div> <br>
                        <p>An external style sheet can be written in any text editor, and must be saved with a <strong>.css</strong> extension. <br>
                        The external .css file should not contain any HTML tags. <br>
                        Here is how the <strong>"mystyle.css"</strong> file looks: <br></p>
                        <div class="code-snippet">
                            <div class="code"> <br>
                                <h4>"mystyle.css"</h4> <br>
                                <script src="https://gist.github.com/AdityaVSM/2af4b7b40545a4a975d0f75c3debf53b.js"></script> <br>
                            </div>
                        </div>
                    </li><br><br>
                </ol>         
            </p>
            
            </div>
        </div>
        <hr>

        <a href="selectors.php" target="_blank"><button type="button" class="prev btn btn-primary btn-lg"> << Prev(CSS selectors)</button></a>
        <a href="munits.php" target="_blank"><button type="button" class="next btn btn-primary btn-lg">Next(CSS units)>></button></a>
        
        <div class="container">
    <section style="height:80px;"></section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Courses</h3>
                        <ul>
							<li><a href="cssblog.php">CSS Syntax</a></li>
                            <li> <a href="selectors.php"> CSS Selectors</a> </li>
                            <li> <a href="howto.php">How to add CSS</a> </li>
                            <li> <a href="munits.php">CSS Measurement units</a></li>
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