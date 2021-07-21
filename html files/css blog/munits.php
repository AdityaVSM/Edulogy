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
                <h1>Measurement units</h1> <br><br>

            <form method="POST" onsubmit="saved(event)">
                <input type="submit" class="save btn btn-primary" value="Save for later"></button>
            </form>

            <script type="text/javascript">
                function saved(event){     
                    event.preventDefault();                 
                    <?php
                        $name = "Measurement units in CSS";
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
                <p style="text-indent:2em">
                    CSS supports a number of measurements including absolute units such as <strong> inches, centimeters, points, </strong> and so on, as well as relative measures such as percentages and <strong> em </strong>units. You need these values while specifying various measurements in your Style rules. <br>e.g.<strong> border = "1px solid red" </strong>.
                </p> <br><br>

                <table class="table  table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="width: 8%;">Unit</th>
                            <th scope="col" style="width: 62%;">Description</th>
                            <th scope="col" style="width: 30%;">Example</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>%</td>
                            <td>Defines a measurement as a percentage relative to another value, typically an enclosing element.</td>
                            <td>p {font-size: 16pt; line-height: 125%;}</td>
                        </tr>
                        <tr>
                            <td>cm</td>
                            <td>Defines a measurement in centimeters.</td>
                            <td>div {margin-bottom: 2cm;}</td>
                        </tr>
                        <tr>
                            <td>em</td>
                            <td>A relative measurement for the height of a font in em spaces. Because an em unit is equivalent to the size of a given font, if you assign a font to 12pt, each "em" unit would be 12pt; thus, 2em would be 24pt</td>
                            <td>p {letter-spacing: 7em;}</td>
                        </tr>
                        <tr>
                            <td>ex</td>
                            <td>This value defines a measurement relative to a font's x-height. The x-height is determined by the height of the font's lowercase letter x.</td>
                            <td>p {font-size: 24pt; line-height: 3ex;}</td>
                        </tr>
                        <tr>
                            <td>in</td>
                            <td>Defines a measurement in inches.</td>
                            <td>p {word-spacing: .15in;}</td>
                        </tr>
                        <tr>
                            <td>mm</td>
                            <td>Defines a measurement in millimeters.</td>
                            <td>p {word-spacing: 15mm;}</td>
                        </tr>
                        <tr>
                            <td>pc</td>
                            <td>Defines a measurement in picas. A pica is equivalent to 12 points; thus, there are 6 picas per inch.</td>
                            <td>p {font-size: 20pc;}</td>
                        </tr>
                        <tr>
                            <td>pt</td>
                            <td>Defines a measurement in points. A point is defined as 1/72nd of an inch.</td>
                            <td>body {font-size: 18pt;}</td>
                        </tr>
                        <tr>
                            <td>px</td>
                            <td>Defines a measurement in screen pixels.	</td>
                            <td>p {padding: 25px;}</td>
                        </tr>
                    </tbody>
                </table>            
            </p>
            
            </div>
        </div>
        <hr>

        <a href="howto.php" target="_blank"><button type="button" class="prev btn btn-primary btn-lg"> << Prev(How to add CSS)</button></a>

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