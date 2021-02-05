
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
            <div class="grid-child-sidebar" > <br><br>
                
                <a href="../html blog/htmlblog.php">HTML</a> <br><br>  
                <div class="dropdown">
                    <a href="cssblog.php">CSS         </a><i class="arrow down"></i></p>
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
                <p>
                    <h1 style="text-align: center; color:blue; text-decoration:underline; text-shadow:3px 1px yellow; ">CSS Selectors</h1> <br><br>
                    <p style="text-indent: 2em;">
                        <strong>CSS selectors</strong> are used to select the content you want to style. Selectors are the part of CSS rule set. CSS selectors select HTML elements according to its id, class, type, attribute etc.
                    </p>
                    There are several different types of selectors in CSS. <br>
                    <ul>
                        <li>CSS element selector</li>
                        <li>CSS id selector</li>
                        <li>CSS class selector</li>
                        <li>CSS universal selector</li>
                        <li>CSS group selector</li>
                    </ul>
                    <br><br>
                    <ol>
                        <li>
                            <h4 style="text-indent :3em;">The Element selector</h4>
                            The element selector selects HTML elements based on the element name. <br>
                            <div class="code-snippet">
                                <div class="code">
                                    Example- <br>
                                    Here, all <em>&ltp&gt</em> elements on the page will be center-aligned, with a red text color: <br>
                                    <script src="https://gist.github.com/AdityaVSM/2bfed01dec7365e391bb5af05b1bb03d.js"></script> <br>
                                </div>
                            </div>    
                        </li>
                        <br> <br>
                        
                        <li>
                            <h4 style="text-indent :3em;">The ID selector</h4>
                            The id selector uses the id attribute of an HTML element to select a specific element.
                            <br> The id of an element is unique within a page, so the id selector is used to select one unique element!
                            <br> To select an element with a specific id, write a hash (#) character, followed by the id of the element.
                            <div class="code-snippet">
                                <div class="code">
                                    Example- <br>
                                    The CSS rule below will be applied to the HTML element with <strong> id="para1"</strong>: <br>
                                    <script src="https://gist.github.com/AdityaVSM/ccbc7483fb2d46cc06628d32c605e368.js"></script> <br>
                                </div>
                            </div>    
                        </li>
                        <br><br>

                        <li>
                            <h4 style="text-indent :3em;">The Class selector</h4>
                            The class selector selects HTML elements with a specific class attribute.
                            <br> To select elements with a specific class, write a period (.) character, followed by the class name.
                            <div class="code-snippet">
                                <div class="code">
                                    Example- <br>
                                    In this example all HTML elements with<strong> class="center"</strong> will be red and center-aligned: <br>
                                    <script src="https://gist.github.com/AdityaVSM/97d2b27b50b2d7531ce1cb09c2ecf8b7.js"></script> <br>
                                </div>
                            </div>    
                        </li>
                        <br><br>

                        <li>
                            <h4 style="text-indent :3em;">The Universal selector</h4>
                            The universal selector (*) selects all HTML elements on the page.
                            <div class="code-snippet">
                                <div class="code">
                                    Example- <br>
                                    The CSS rule below will affect every HTML element on the page:  <br>
                                    <script src="https://gist.github.com/AdityaVSM/1ab9c77be5d798d1c5eb04341068eb9f.js"></script> <br>
                                </div>
                            </div>    
                        </li>
                        <br><br>

                        <li>
                            <h4 style="text-indent :3em;">The Group selector</h4>
                            The grouping selector selects all the HTML elements with the same style definitions. <br>
                            Look at the following CSS code (the h1, h2, and p elements have the same style definitions): <br>
                            <div class="code-snippet">
                                <div class="code">
                                    <br>
                                    <script src="https://gist.github.com/AdityaVSM/c7775f7a08eccbc303d19320fd94d4f6.js"></script> <br>
                                </div>
                            </div> <br>
                            It will be better to group the selectors, to minimize the code. <br>
                            To group selectors, separate each selector with a comma. <br>
                            <div class="code-snippet">
                                <div class="code">
                                    Example- <br>
                                    In this example we have grouped the selectors from the code above:   <br>
                                    <script src="https://gist.github.com/AdityaVSM/536a336daa21f6f0be0305297479f4da.js"></script> <br>
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
							<li><a href="csssyntax.php">CSS Syntax</a></li>
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