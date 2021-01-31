
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

        <img style = "height: 400px;width: 100%; padding:30px" src="cssImage.png"  alt="css image">  
        <hr>

        <div class="grid-container">
            <div class="grid-child-sidebar" >
                
                <a href="../html blog/htmlblog.php">HTML</a> <br><br>  
                <div class="dropdown">
                    <a href="cssblog.php">CSS    </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="csssyntax.php">Syntax</a><br>
                        <a href="selectors.php">Selectors</a><br>
                        <a href="howto.php">How to add CSS</a><br>
                    </div>
                </div><br>         
                <a href="../cpp blog/cppblog.php">C++</a> <br><br>             
                <a href="../java blog/javablog.php">JAVA</a> <br><br>             
                <a href="../c blog/cblog.php">C </a> <br><br>
                <a href="../python blog/pythonblog.php">PYTHON</a> <br><br>
            </div>

            <div class="grid-child-content">
            <p >
                <h1 style="text-align: center; color:blue; text-decoration:underline; text-shadow:3px 1px yellow; ">How to add CSS</h1> <br><br>
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
                        An inline style may be used to apply a unique style for a single element. <br>
                        To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.
                        <div class="code-snippet">
                            <div class="code">
                                Example: <br>
                                Inline styles are defined within the "style" attribute of the relevant element:
                                <script src="https://gist.github.com/AdityaVSM/95c6d39a066f181985585d4af8edf868.js"></script> <br>
                            </div>
                        </div> 
                    </li><br><br>

                    <li>
                        <h4 style="text-indent :3em;">Internal CSS</h4>
                        An internal style sheet may be used if one single HTML page has a unique style.<br>
                        The internal style is defined inside the <strong> &ltstyle&gt </strong> element, inside the head section.
                        <div class="code-snippet">
                            <div class="code">
                                Example: <br>
                                Internal styles are defined within the <strong> &ltstyle&gt </strong> element, inside the <strong>&lthead&gt</strong> section of an HTML page:
                                <script src="https://gist.github.com/AdityaVSM/af88c007da849cd114f981c2f98406de.js"></script><br>
                            </div>
                        </div> 
                    </li><br><br>

                    <li>
                        <h4 style="text-indent :3em;">External CSS</h4>
                        External CSS is used to apply CSS on multiple pages or all pages. Here, we write all the CSS code in a css file. <br>
                        Each HTML page must include a reference to the external style sheet file inside the <strong> &ltlink&gt </strong> element, inside the head section.
                        <div class="code-snippet">
                            <div class="code">
                                Example: <br>
                                External styles are defined within the <strong>&ltlink&gt</strong> element, inside the <strong>&lthead&gt</strong>section of an HTML page:
                                <script src="https://gist.github.com/AdityaVSM/5294f31c8fefb19224f275b8382a20e9.js"></script> <br>
                            </div>
                        </div>
                        An external style sheet can be written in any text editor, and must be saved with a .css extension. <br>
                        The external .css file should not contain any HTML tags. <br>
                        Here is how the "mystyle.css" file looks: <br>
                        <div class="code-snippet">
                            <div class="code">
                                <h5>"mystyle.css"</h5> 
                                <script src="https://gist.github.com/AdityaVSM/2af4b7b40545a4a975d0f75c3debf53b.js"></script> <br>
                            </div>
                        </div>
                    </li><br><br>


                </ol>
            
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
							<li><a href="cssblog.php">CSS Syntax</a></li>
                            <li> <a href="selectors.php"> CSS Selectors</a> </li>
                            <li> <a href="howto.php">How to add CSS</a> </li>
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