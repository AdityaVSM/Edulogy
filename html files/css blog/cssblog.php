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
            <div class="grid-child-sidebar" >
            <br><br>
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
            <p>
            <h1>CSS tutorial</h1><br>
            
            <p>
                CSS is used to control the style of a web document in a simple and easy way.
                CSS is the acronym for <strong>"Cascading Style Sheet"</strong>. This tutorial covers both the versions CSS1,CSS2 and CSS3, and gives a complete understanding of CSS, starting from its basics to advanced concepts.
            </p>
            <div style="text-align: center;"><br><strong><h3>Why to Learn CSS?</h3></strong><br></div>
            <p>
                Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web pages presentable.
                CSS is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning CSS:
            <ul>
                <li><strong>Create Stunning Web site</strong> - CSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out, what background images or colors are used, layout designs,variations in display for different devices and screen sizes as well as a variety of other effects.</li> <br>
                <li><strong>Become a web designer</strong>  - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.</li> <br>
                <li><strong>Control web</strong>  - CSS is easy to learn and understand but it provides powerful control over the presentation of an HTML document. Most commonly, CSS is combined with the markup languages HTML or XHTML.</li> <br>
                <li><strong>Learn other languages</strong>  - Once you understands the basic of HTML and CSS then other related technologies like javascript, php, or angular are become easier to understand.</li> <br>
            </ul>
                </p>

            <div style="text-align: center;"><br><strong><h3>Applications of CSS</h3></strong><br></div>
            <p>
                As mentioned before, CSS is one of the most widely used style language over the web. I'm going to list few of them here:
            <ul>
                <li><strong>CSS saves time</strong> - You can write CSS once and then reuse same sheet in multiple HTML pages. You can define a style for each HTML element and apply it to as many Web pages as you want.</li> <br>
                <li><strong>Pages load faster</strong> - If you are using CSS, you do not need to write HTML tag attributes every time. Just write one CSS rule of a tag and apply it to all the occurrences of that tag. So less code means faster download times.</li> <br>
                <li><strong>Easy maintenance</strong> - To make a global change, simply change the style, and all elements in all the web pages will be updated automatically.</li> <br>
                <li><strong>Superior styles to HTML</strong> - CSS has a much wider array of attributes than HTML, so you can give a far better look to your HTML page in comparison to HTML attributes.</li> <br>
                <li><strong>Multiple Device Compatibility</strong> - Style sheets allow content to be optimized for more than one type of device. By using the same HTML document, different versions of a website can be presented for handheld devices such as PDAs and cell phones or for printing.</li> <br>
                <li><strong>Global web standards</strong> - Now HTML attributes are being deprecated and it is being recommended to use CSS. So its a good idea to start using CSS in all the HTML pages to make them compatible to future browsers.</li> <br>
            </ul>
                </p>
            
            <div style="text-align: center;"><br><strong><h3>Prerequisites</h3></strong><br></div>
            You should be familiar with:<br>
                <ul>
                    <li>Basic word processing using any text editor.</li>
                    <li>How to create directories and files.</li>
                    <li>How to navigate through different directories.</li>
                    <li>Internet browsing using popular browsers like Internet Explorer or Firefox.</li>
                    <li>Developing simple Web Pages using HTML or XHTML.</li>
                </ul>
            
            </p>
            
            </div>
        </div>
        <hr>

        <a href="csssyntax.php" target="_blank"><button type="button" class="next btn btn-primary btn-lg">Next(CSS Syntax)>></button></a>
        
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