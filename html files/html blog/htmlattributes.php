<?php
    session_start();
	include("../../connection.php");
    include("../../functions.php");
    $user_data = check_login($con);
    $user_name = $user_data['user_name'];
    $id = $user_data['id'];

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
                <p >
                    <h1>HTML Attributes</h1> <br>

            <form method="POST" onsubmit="saved(event)">
                <input type="submit" class="btn btn-primary" value="Save for later"></button>
            </form>

            <script type="text/javascript">
                function saved(event){     
                    event.preventDefault();                 
                    <?php
                        $name = "HTML Attributes";
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
                    <p style="text-indent:2em;">
                        We have seen few HTML tags and their usage like heading tags <em> &lth1&gt, &lth2&gt </em>, paragraph tag <em>&ltp&gt</em> and other tags.
                        We used them so far in their simplest form, but most of the HTML tags can also have attributes, which are extra bits of information. <br>
                        An attribute is used to define the characteristics of an HTML element and is placed inside the element's opening tag. 
                        All attributes are made up of two parts − a name and a value
                        <ul>
                            <li>The <strong>name</strong> is the property you want to set. For example, the paragraph <em>&ltp&gt</em> element in the example carries an attribute whose name is <strong>align</strong>, which you can use to indicate the alignment of paragraph on the page.</li>
                            <li>The <strong>value</strong> value is what you want the value of the property to be set and always put within quotations. The below example shows three possible values of align attribute: <strong> left, center and right. </strong></li>
                        </ul>
                        <br>
                        <div class="code-snippet">
                            <div class="code">
                                <br> <h4>Example-</h4>
                                <a href="http://tpcg.io/X3hm8lGL" target="_blank"><input class="btn btn-secondary try_it"  type="submit" value="Demo"></a>
                                <script src="https://gist.github.com/AdityaVSM/f3657c373ab92f2b86b93b04d1ffefec.js"></script> <br>
                            </div>
                        </div>
                        
                        <br><br>
                        This will display the following result − <br><br>
                        <div class="code-snippet" style="text-indent:none">
                            <div class="code">
                                <p style="text-align:left">This is left aligned</p> 
                                <p style="text-align:center">This is center aligned</p> 
                                <p style="text-align:right">This is right aligned</p> 
                            </div>
                        </div> <br><br>

                        <h3 style="text-indent :3em;"> Core Attributes: </h3>
                        The four core attributes that can be used on the majority of HTML elements (although not all) are −
                        <ul>
                            <li>Id</li>
                            <li>Title</li>
                            <li>Class</li>
                            <li>Style</li>
                        </ul> <br>
                        
                        <ol>
                        <li><h4 style="text-indent :2em;">The Id attribute</h4>
                        <p style="text-indent:1em;">
                            The ID attribute uniquely identifies an element within a document. No two elements can have the same ID value in a single document. 
                            The attribute’s value must begin with a letter in the range A-Z or a-z and may be followed by letters (A-Za-z), digits (0-9), hyphens (“-“), underscores (“_”), colons (“:”), and periods (“.”). 
                            The value is case-sensitive. <br> The following example uses the ID attribute to identify each of the first two paragraphs of a document:  <br>
                            <script src="https://gist.github.com/AdityaVSM/c20181c23725f573f270692f7884f50d.js"></script>
                        </p> <br></li>

                        <li><h4 style="text-indent :2em;">The Title attribute</h4>
                        <p style="text-indent:1em;">
                            The <strong>title</strong> attribute gives a suggested title for the element. They syntax for the title attribute is similar as explained for id attribute  <br>
                            The behavior of this attribute will depend upon the element that carries it, although it is often displayed as a tooltip when cursor comes over the element or while the element is loading. <br>
                            
                            <div class="code-snippet">
                                <div class="code"> <br>
                                    <h4>Example-</h4>
                                    <a href="http://tpcg.io/c6UwBPQM" target="_blank"><input class="btn btn-secondary try_it"  type="submit" value="Demo"></a>
                                    <script src="https://gist.github.com/AdityaVSM/19da7333b4473c1ec7d5639d60271f6e.js"></script> <br>
                                </div>
                            </div>                            
                            
                            <br>This produces the following output - <br>
                            <div class="code-snippet">
                                <div class="code"> <br>
                                    <h3 title = "Hello HTML!">Titled Heading Tag Example</h3>
                                    <br>
                                </div>
                            </div>
                            Now try to bring your cursor over "Titled Heading Tag Example" and you will see that whatever title you used in your code is coming out as a tooltip of the cursor.
                        </p> <br></li>

                        <li><h4 style="text-indent:2em;">The class Attribute</h4>
                        <p style="text-indent:1em;">
                            The <strong>class</strong> attribute specifies one or more classnames for an element.   <br>
                            The <strong>class</strong> attribute is mostly used to point to a class in a style sheet.
                            However, it can also be used by a JavaScript (via the HTML DOM) to make changes to HTML elements with a specified class.                         
                            
                            <div class="code-snippet">
                                <div class="code">
                                    <br><h4>Example-</h4>
                                    <a href="http://tpcg.io/omw5AuC4" target="_blank"><input class="btn btn-secondary try_it"  type="submit" value="Demo"></a>
                                    <script src="https://gist.github.com/AdityaVSM/bbce9632e608114a6f070f86efab02d1.js"></script> <br>
                                </div>
                            </div>
                           
                       </p> <br>

                       <li><h4 style="text-indent :2em;">The Style Attribute</h4>
                       <p style="text-indent :1em;">
                            The <strong>style</strong> attribute specifies an inline style for an element. <br>
                            The <strong>style</strong> attribute will override any style set globally, e.g. styles specified in the <em>&ltstyle&gt</em> tag or in an external style sheet.
                            
                            <div class="code-snippet">
                                <div class="code">
                                    <br><h4>Example-</h4>
                                    <a href="http://tpcg.io/HuVbdM8L" target="_blank"><input class="btn btn-secondary try_it"  type="submit" value="Demo"></a>
                                    <script src="https://gist.github.com/AdityaVSM/8b78a09796ad530611b7a462a4fb1f49.js"></script> <br>
                                </div>
                            </div>
                            
                            This produces the following output - <br><br>
                            <div class="code-snippet">
                                <div class="code">
                                    <p style = "font-family:arial; color:#FF0000;">Some text...</p> <br>
                                </div>
                            </div>
                        </p></li>
                        </ol>

                    </p>
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