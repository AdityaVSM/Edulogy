<?php
    session_start();
	include("../../connection.php");
    include("../../functions.php");
    $user_data = check_login($con);
    $user_name = $user_data['user_name'];
    $user_id = $user_data['user_id'];
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="../../style.css">

    </head>
    <body >        
        <style>
            @import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
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
                
            <div class="dropdown"> <br><br>
                    <a href="htmlblog.php">HTML   </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="htmlintro.php">Basics</a><br>
                        <a href="htmltags.php">Tags</a><br>
                        <a href="htmlelements.php">Elements</a><br>
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
                <h1>HTML basics</h1> <br>
                <form method="POST">
                       <button type="submit" id="book" onsubmit="saved()">Save for later</button>
                    </form>
                <script type="text/javascript">
                    function saved(){
                        var text = document.getElementById("book");
                        if(text.innerHTML==="Save for later" || text.innerHTML=="Page unsaved"){                            
                            <?php
                                 if($_SERVER['REQUEST_METHOD'] == "POST"){
                                    $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 
                                    $query = "INSERT INTO bokmark(user_id, bookmark_url) VALUES('$user_id','$url');";
                                    mysqli_query($con,$query);	
                                }0
                            ?> 
                            text.innerHTML = 'Page Saved';                                                                                 
                        }else{
                            text.innerHTML = 'Page unsaved';
                        }
                    }
                </script>
                <p>
                    <ul>
                        <li>All HTML documents must start with a document type declaration:<em> &lt!DOCTYPE html&gt</em>. </li>
                        <li>The HTML document itself begins with <em>&lthtml&gt</em> and ends with <em>&lt/html&gt </em>.</li> 
                        <li>The visible part of the HTML document is between <em>&ltbody&gt</em> and <em>&lt/body&gt</em>.</li>
                    </ul><br>
                    <div class="code-snippet">
                        <div class="code">
                            <br> <h4>Example-</h4>
                            <a href="http://tpcg.io/W2PZ1Url" target="_blank"><input class="try_it"  type="button" value="Demo"></a> 
                            <script src="https://gist.github.com/AdityaVSM/883ba8e4451f84c809713700be965a24.js"></script><br>                        
                        </div>
                    </div>

                    <h2 style="text-indent :5em;">How to View HTML Source code?</h2><br>
                    
                    <h5 style="text-indent :2em;">View HTML Source Code:</h5>
                    Right-click in an HTML page and select <em>"View Page Source"</em> (in Chrome) or <em>"View Source"</em> (in Edge), or similar in other browsers. This will open a window containing the HTML source code of the page.<br><br>
                    <h5 style="text-indent :2em;">Inspect an HTML Element:</h5>
                    Right-click on an element (or a blank area), and choose <em>"Inspect"</em> or <em>"Inspect Element"</em> to see what elements are made up of (you will see both the HTML and the CSS). You can also edit the HTML or CSS on-the-fly in the Elements or Styles panel that opens.
                    <br><br>

                    <h2 style="text-indent :5em;">Which text editor to use?</h2><br>

                    <h5 style="text-indent :2em;">Atom</h5>
                    It is an HTML editor that came out in 2014. Atom is a free, open-source code editor, and it was developed by GitHub.
                    Atom offers a slick design with a premium look to it, plus has a live preview. <br>
                    Available for: Windows, OS X, and Linux (64-bit).<br><br>

                    <h5 style="text-indent :2em;">Notepad++</h5>
                    It is a free HTML editor that was developed for Windows. Linux users can also get it running through Wine. Third-party plugins are supported.
                    Notepad++ is ultra-lightweight plus there’s a mobile version of it.  <br>
                    Available for: Windows and Linux.<br><br>
                    
                    <h5 style="text-indent :2em;">Sublime Text</h5>                    
                    It is another free HTML editor. Developed by a Sydney-based company, it's kind of like a freemium software. It means that you can use the software for free but you'll have to pay to access all its features.
                    You can add plugins made by the community or build your own plugin.  <br>
                    Available for: Windows, OS X, and Linux (32/64 bit). <br><br>
                 
                    <h5 style="text-indent :2em;">VS Code</h5>
                    Visual Studio Code provides basic support for HTML programming out of the box.
                    There is syntax highlighting, smart completions with IntelliSense, and customizable formatting. 
                    VS Code also includes great Emmet support. <br>
                    Available for: Windows, OS X, and Linux (32/64 bit).
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