
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
                <br><br>
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
                    <h1>CSS Syntax</h1> <br><br>
                    <p >
                        A CSS comprises of style rules that are interpreted by the browser and then applied to the corresponding elements in your document. A style rule is made of three parts −
                    </p>
                    <ul>
                        <li><strong>Selector</strong> − A selector is an HTML tag at which a style will be applied. This could be any tag like <em>&lth1&gt</em> or <em>&lttable&gt</em> etc.</li> <br>
                        <li><strong>Property</strong> − A property is a type of attribute of HTML tag. Put simply, all the HTML attributes are converted into CSS properties. They could be color, border etc.</li> <br>
                        <li><strong>Value</strong> − Values are assigned to properties. For example, color property can have value either red or #F1F1F1 etc.</li> <br>
                    </ul>
                    <img style="position:relative; left:100px;" src="syntax.png"> <br><br>
                    <p> 
                        Here table is a selector and border is a property and given value 1px solid #C00 is the value of that property.
                    </p>

                    <div class="code-snippet">
                        <div class="code">
                            Here is an example: <br>
                            In this example all <em> &ltp&gt </em> elements will be center-aligned, with a red text color: <br>
                            <script src="https://gist.github.com/AdityaVSM/2bfed01dec7365e391bb5af05b1bb03d.js"></script> <br>
                        </div>
                    </div> <br><br>

                    <h3> Example Explained- </h3> <br>
                    <ul>
                        <li> <strong> p </strong> is a <u>selector</u> in CSS (it points to the HTML element you want to style: <strong>&ltp&gt</strong>)</li>
                        <li> <strong> color  </strong> is a <u> property </u>, and red is the  <em> property value </em></li>
                        <li> <strong> text-align </strong> is a <u> property </u>, and center is the <em> property value </em></li>
                    </ul>
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