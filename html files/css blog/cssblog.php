
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
                
            <div class="dropdown">
                    <a href="../html blog/htmlblog.php">HTML   </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="../html blog/htmlblog.php">introduction</a><br>
                        <a href="../html blog/htmlblog.php">basics</a><br>
                        <a href="../html blog/htmlblog.php">tags</a><br>
                    </div>
                </div> <br>
                <div class="dropdown">
                    <a href="cssblog.php">CSS    </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="cssblog.php">intro</a><br>
                        <a href="cssblog.php">jash</a><br>
                        <a href="cssblog.php">ajsh</a><br>
                    </div>
                </div><br>
                <div class="dropdown">
                    <a href="../cpp blog/cppblog.php">C++    </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="../cpp blog/cppblog.php">intro</a><br>
                        <a href="../cpp blog/cppblog.php">jash</a><br>
                        <a href="../cpp blog/cppblog.php">ajsh</a><br>
                    </div>
                </div><br>
                <div class="dropdown">
                    <a href="../java blog/javablog.php">JAVA    </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="../java blog/javablog.php">intro</a><br>
                        <a href="../java blog/javablog.php">jash</a><br>
                        <a href="../java blog/javablog.php">ajsh</a><br>
                    </div>
                </div><br>
                <div class="dropdown">
                    <a href="../c blog/cblog.php">C    </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="../c blog/cblog.php">intro</a><br>
                        <a href="../c blog/cblog.php">jash</a><br>
                        <a href="../c blog/cblog.php">ajsh</a><br>
                    </div>
                </div><br>
                <div class="dropdown">
                    <a href="../python blog/pythonblog.php">PYTHON    </a><i class="arrow down"></i></p>
                    <div class="dropdown-content">
                        <a href="../python blog/pythonblog.php">intro</a><br>
                        <a href="../python blog/pythonblog.php">jash</a><br>
                        <a href="../python blog/pythonblog.php">ajsh</a><br>
                    </div>
                </div><br>
            </div>

            <div class="grid-child-content">
            <p >
            <h1 style="text-align: center; color:blue; text-decoration:underline; text-shadow:3px 1px yellow; ">CSS tutorial</h1>

            <br>CSS is used to control the style of a web document in a simple and easy way.
            CSS is the acronym for "Cascading Style Sheet". This tutorial covers both the versions CSS1,CSS2 and CSS3, and gives a complete understanding of CSS, starting from its basics to advanced concepts.

            <div style="text-align: center;"><br><strong><h3>Why to Learn CSS?</h3></strong><br></div>
            Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web pages presentable.
            CSS is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning CSS:
            <ul>
                <li><strong>Create Stunning Web site</strong> - CSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out, what background images or colors are used, layout designs,variations in display for different devices and screen sizes as well as a variety of other effects.</li>
                <li><strong>Become a web designer</strong>  - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.</li>
                <li><strong>Control web</strong>  - CSS is easy to learn and understand but it provides powerful control over the presentation of an HTML document. Most commonly, CSS is combined with the markup languages HTML or XHTML.</li>
                <li><strong>Learn other languages</strong>  - Once you understands the basic of HTML and CSS then other related technologies like javascript, php, or angular are become easier to understand.</li>
            </ul>

            <div style="text-align: center;"><br><strong><h3>Applications of CSS</h3></strong><br></div>
            As mentioned before, CSS is one of the most widely used style language over the web. I'm going to list few of them here:
            <ul>
                <li><strong>CSS saves time</strong> - You can write CSS once and then reuse same sheet in multiple HTML pages. You can define a style for each HTML element and apply it to as many Web pages as you want.</li>
                <li><strong>Pages load faster</strong> - If you are using CSS, you do not need to write HTML tag attributes every time. Just write one CSS rule of a tag and apply it to all the occurrences of that tag. So less code means faster download times.</li>
                <li><strong>Easy maintenance</strong> - To make a global change, simply change the style, and all elements in all the web pages will be updated automatically.</li>
                <li><strong>Superior styles to HTML</strong> - CSS has a much wider array of attributes than HTML, so you can give a far better look to your HTML page in comparison to HTML attributes.</li>
                <li><strong>Multiple Device Compatibility</strong> - Style sheets allow content to be optimized for more than one type of device. By using the same HTML document, different versions of a website can be presented for handheld devices such as PDAs and cell phones or for printing.</li>
                <li><strong>Global web standards</strong> - Now HTML attributes are being deprecated and it is being recommended to use CSS. So its a good idea to start using CSS in all the HTML pages to make them compatible to future browsers.</li>
            </ul>
            
            <div style="text-align: center;"><br><strong><h3>Prerequisites</h3></strong><br></div>
            You should be familiar with:<br>
            <em>
                <ul>
                    <li>Basic word processing using any text editor.</li>
                    <li>How to create directories and files.</li>
                    <li>How to navigate through different directories.</li>
                    <li>Internet browsing using popular browsers like Internet Explorer or Firefox.</li>
                    <li>Developing simple Web Pages using HTML or XHTML.</li>
                </ul>
            </em>
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