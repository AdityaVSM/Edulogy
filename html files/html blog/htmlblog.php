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
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
                <h1>HTML tutorial</h1> <br>


                    <form method="POST" onsubmit="saved(event)">
                       <input type="submit" class="save btn btn-primary" value="Save for later"></button>
                    </form>
                    
                    <script type="text/javascript">
                        function saved(event){     
                            event.preventDefault();                 
                            <?php
                                $name = "HTML introduction";
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
                    
                <p>
                    HTML stands for Hyper Text Markup Language, which is the most widely used language on Web to develop web pages. HTML was created by <em>Berners-Lee</em> in late 1991 but "HTML 2.0" was the first standard HTML specification which was published in 1995. HTML 4.01 was a major version of HTML and it was published in late 1999. Though HTML 4.01 version is widely used but currently we are having HTML-5 version which is an extension to HTML 4.01, and this version was published in 2012.
                </p>

                <div style="text-align: center;"><br><strong><h3>Why to Learn HTML?</h3></strong><br></div>
                <p>
                    Originally, HTML was developed with the intent of defining the structure of documents like headings, paragraphs, lists, and so forth to facilitate the sharing of scientific information between researchers. Now, HTML is being widely used to format web pages with the help of different tags available in HTML language.<br>
                    HTML is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning <br>
                    <br>      
                    <ul>
                        <li><strong>Create Web site</strong> - You can create a website or customize an existing web template if you know HTML well.</li> <br>
                        <li><strong>Become a web designer</strong> - If you want to start a carrer as a professional web designer, HTML and CSS designing is a must skill.</li> <br>
                        <li><strong>Understand web</strong> - If you want to optimize your website, to boost its speed and performance, it is good to know HTML to yield best results.</li> <br>
                        <li><strong>Learn other languages</strong> - Once you understands the basic of HTML then other related technologies like javascript, php, or angular are become easier to understand.</li> <br>
                    </ul>
                </p>

                <div style = "text-align: center;"><br><strong><h3>Applications of HTML</h3></strong></div> <br>
                <p>
                    As mentioned before, HTML is one of the most widely used language over the web. I'm going to list few of them here:
                <ul>
                    <li><strong>Web pages development</strong> - HTML is used to create pages which are rendered over the web. Almost every page of web is having html tags in it to render its details in browser.</li> <br>
                    <li><strong>Internet Navigation</strong> - HTML provides tags which are used to navigate from one page to another and is heavily used in internet navigation.</li> <br>
                    <li><strong>Responsive UI</strong> - HTML pages now-a-days works well on all platform, mobile, tabs, desktop or laptops owing to responsive design strategy. Offline support HTML pages once loaded can be made available offline on the machine without any need of internet.</li> <br>
                    <li><strong>Game development</strong>- HTML5 has native support for rich experience and is now useful in gaming developent arena as well.</li> <br>
                </ul>
                    </p>
            
                <div style= "text-align: center;"><br><strong><h3>Prerequisites</h3></strong></div> <br>
                <p>
                    Before learning html you should have a basic working knowledge with Windows or Linux operating system, additionally you must be familiar with −
                <ul>
                    <li>Experience with any text editor like notepad, notepad++, or Edit plus etc.</li> <br>
                    <li>How to create directories and files on your computer.</li> <br>
                    <li>How to navigate through different directories.</li> <br>
                    <li>How to type content in a file and save them on a computer.</li> <br>
                    <li>Understanding about images in different formats like JPEG, PNG format. </li> <br>
                </ul>
                    </p> 
            </p>            
            </div>
        </div>
        <hr>
        <a href="htmlintro.php" target="_blank"><button type="button" class="next btn btn-primary btn-lg">Next (HTML basics)>></button></a>


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