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
        <style>
            body{
                background-color:	#E8E8E8;
            }
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
            <a style="color:white" class="navbar-brand" href="../../news.php" target="_blank">News</a>
            <a style="color:white" class="navbar-brand" href="../../bookmark.php" target="_blank">Bookmarks</a>

        </nav>

        
        <img style = "height: 400px;width: 100%; padding:30px" src="htmlImage.png" alt="html image">
        <hr>

        <div class="grid-container">
            <div class="grid-child-sidebar" >
                
            <div class="dropdown"> <br><br>
                    <a href="htmlblog.php">HTML   </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="htmlintro.php">Basics</a><br>
                        <a href="htmltags.php">Tags</a><br>
                        <a href="htmlelements.php">Elements</a> <br>
                        <a href="htmlattributes.php">Attributes</a><br>
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
                <h1>HTML tags</h1> <br>

            
                    <ul>
                        <li>HTML tags are like keywords which defines that how web browser will format and display the content</li> <br>
                        <li>With the help of tags, a web browser can distinguish between an HTML content and a simple content</li> <br>
                        <li>HTML tags contain three main parts: <em>opening tag</em>, <em>close tag</em>,<em>content and closing tag</em>, but some HTML tags are unclosed tags</li> <br>
                        <li>When a web browser reads an HTML document, browser reads it from top to bottom and left to right</li> <br>
                        <li>HTML tags are used to create HTML documents and render their properties. Each HTML tags have different properties.</li>  <br>
                        <li>An HTML file must have some essential tags so that web browser can differentiate between a simple text and HTML text. You can use as many tags you want as per your code requirement.</li> <br>
                    </ul> <br><br>
                    <h4 style="text-indent :3em;">HTML contains lots of predefined tag. Some of them are described below:</h2> <br>
                    <h5 style="text-indent :2em;">Document structure tags:</h5> <br>
                    <ul>
                        <li>
                            <strong style="text-indent:1em;">HTML tag : </strong>It is the root of the html document which is used to specify that the document is html.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/a1ae635d9fc14d22c8ee9454f358d608.js"></script>
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Head tag : </strong>Head tag is used to contain all the head element in the html file. It contains the title, style, meta, … etc tag.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/7a6f335fb835bc6e83fea062be889bf0.js"></script>
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Body tag : </strong>It is used to define the body of html document. It contains image, tables, lists, … etc.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/2e62442cabb949c3f92890974d498854.js"></script>
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Title tag : </strong>It is used to define the title of html document.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/acdb0fb1560e03d3b3e13ab312665b39.js"></script> 
                        </li> <br> <br>
                    </ul>
                    <h5 style="text-indent :2em;">Content container tags:</h5> <br>
                    <ul>
                        <li>
                            <strong style="text-indent:1em;">Heading tag : </strong> It is used to define the heading of html document.It allows user to customize the size of text.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/4e629333fd31cc754f1a8158a38dab69.js"></script>
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Paragraph tag : </strong> It is used to define a paragraph content in html.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/13daafcc17810732fab361c98c44a46f.js"></script>                        
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Emphasis tag : </strong> The emphasis tag is used when you need to emphasize a particular word or phrase within a sentence.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/725b4660d0fe9d8b5700f75885935e95.js"></script>
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Strong, Italic, Small, Underline, Strike tags : </strong> <br>
                            <em>Strong tag</em>  is used to specify bold content in html document <br>
                            <em>Italic tag </em>  is used to write the content in italic format. <br>
                            <em>Small tag </em>   is used to set the small font size of the content. <br>
                            <em>Underline tag </em>  is used to set the content underline. <br>
                            <em>Strike tag </em>  is used to represent as deleted text. It cross the text content. 
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/67c14d6a29bcd345ba5e049479fb9d07.js"></script>
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Unordered lists tag : </strong>It is used to list the content. The list items will be marked with bullets (small black circles) by default.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/8bf9bdec4dbb10abc33fe2c32d6a1666.js"></script>
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Ordered lists tag : </strong>It is used to list the content. The list items will be marked with numbers by default.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/62884fd87dc24cf78aa3f83a55c0d21b.js"></script>
                        </li> <br>
                    </ul>
                    <h5 style="text-indent :2em;">Empty / Non-container tags:</h5> <br>
                    <ul>
                        <li>
                            <strong style="text-indent:1em;">Line break tag : </strong>The line break tag inserts a single line break.
                            <br><strong>Syntax:</strong>
                            
                            <script src="https://gist.github.com/AdityaVSM/1e39b903208b4a0644c62ee3ff2f49a2.js"></script>
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Link tag : </strong>It is used to link content from external files like css, javscript files. This tag is used inside head tag.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/6817d17b616c1b519fdf370d92017950.js"></script>
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Horizantal ruler tag : </strong>It is used to display the horizontal line in html document.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/9cb971124a722c08925ee24ac1b69aa3.js"></script>
                        </li> <br>
                        <li>
                            <strong style="text-indent:1em;">Meta tag : </strong>It is used to specify the page description. For example: last modifier, authors, … etc.meta tags don't appear on the page itself, but only in the page's source code. Meta tags are essentially little content descriptors that help tell search engines what a web page is about.
                            <br><strong>Syntax:</strong>
                            <script src="https://gist.github.com/AdityaVSM/76181ec98f6662e7db72ff358f755fcd.js"></script>
                        </li> <br>

                    </ul>

                    
                </p>
            </div>
        </div>
        <hr>
        <a href="htmlintro.php" target="_blank"><button type="button" class="prev btn btn-primary btn-lg"><< Prev(HTML basics)</button></a>
        <a href="htmlelements.php" target="_blank"><button type="button" class="next btn btn-primary btn-lg">Next (HTML elements)>></button></a>

        <div class="container">
    <section style="height:80px;"></section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Courses</h3>
                        <ul>
                            <li><a href="htmlblog.php">HTML 5 introduction</a></li>
							<li><a href="htmlintro.php">HTML Basics</a></li>
							<li><a href="htmltags.php">HTML Tags</a></li>
                            <li><a href="htmlelements.php">HTML elements</a></li>
                            <li><a href="htmlattributes.php">HTML Attributes</a></li>
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