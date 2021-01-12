
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
        
        <style>
            .head-image{
                height: 400px;
                width : 100%;
            }
        </style>
        <nav class="navbar navbar-light bg-dark justify-content-between" >
            <a style="color:white" class="navbar-brand" href="../../index.php">Home</a>
            <a style="color:white" class="navbar-brand" href="../../signup.php">Sign Up</a>
            <a style="color:white" class="navbar-brand" href="../../login.php">Login</a>
            <a style="color:white" class="navbar-brand" href="../../logout.php">Logout</a>
            <a style="color:white" class="navbar-brand" href="../../profile.php">View profile</a>
        </nav>

        
        <img style = "height: 400px;width: 100%; padding:30px" src="htmlImage.png" alt="html image">
        <hr>

        <div class="grid-container">
            <div class="grid-child-sidebar" >
                
            <div class="dropdown">
                    <a href="htmlblog.php">HTML   </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="htmlblog.php">introduction</a><br>
                        <a href="htmlblog.php">basics</a><br>
                        <a href="htmlblog.php">tags</a><br>
                    </div>
                </div> <br>
                <a href="../css blog/cssblog.php">CSS</a> <br><br>              
                <a href="../cpp blog/cppblog.php">C++</a> <br><br>             
                <a href="../java blog/javablog.php">JAVA</a> <br><br>             
                <a href="../c blog/cblog.php">C </a> <br><br>
                <a href="../python blog/pythonblog.php">PYTHON</a> <br><br>
            </div>

            <div class="grid-child-content">
                <p>
                    <h2 style="text-align: left;">HTML Documents</h2>
                    All HTML documents must start with a document type declaration: &lt!DOCTYPE html&gt.  <br>
                    The HTML document itself begins with &lthtml&gt and ends with &lt/html&gt. <br>
                    The visible part of the HTML document is between &ltbody&gt and &lt/body&gt.
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
							<li><a href="html files/html blog/htmlblog.php">html 5</a></li>
							<li><a href="html files/css blog/cssblog.php">css 3</a></li>
							<li><a href="html files/cpp blog/cppblog.php">c++</a></li>
							<li><a href="html files/java blog/javablog.php">java</a></li>
							<li><a href="html files/c blog/cblog.php">c</a></li>
							<li><a href="html files/python blog/pythonblog.php">python</a></li>
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