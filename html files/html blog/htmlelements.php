
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
                    <h1 >HTML Elements</h1> <br>
                    <div style="text-indent: 3em;">
                        An HTML file is made of elements. These elements are responsible for creating web pages and define content in that webpage. 
                        An element in HTML usually consist of a start tag <em>&lttag name&gt</em>, close tag <em>&lt/tag name&gt</em> and content inserted between them. 
                        Technically, an element is a collection of start tag, attributes, end tag, content between them.
                    </div> <br>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Count</th>
                                <th scope="col">Start tags</th>
                                <th scope="col">Content</th>
                                <th scope="col">Last tag</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>&ltp&gt</td>
                                <td>Paragraph content</td>
                                <td>&lt/p&gt</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>&lth1&gt</td>
                                <td>Heading content</td>
                                <td>&lt/h1&gt</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>&ltdiv&gt</td>
                                <td>Division content</td>
                                <td>&lt/div&gt</td>
                            </tr>
                        </tbody>
                    </table>

                    <div style="text-indent:2em;">
                        So here <em> &ltp&gt....&lt/p&gt</em> is an HTML element, <em>&lth1&gt...&lt/h1&gt</em> is another HTML element. 
                        There are some HTML elements which don't need to be closed, such as <em>&ltimg.../&gt</em>, <em>&lthr /&gt</em> and <em>&ltbr /&gt</em> elements. 
                        These are known as <em>void elements</em>.
                    </div> <br> <br>
                    
                    <h4 style="text-indent :3em;">HTML Tag vs. Element</h4> <br>
                    <div style="text-indent :2em"> 
                        An HTML element is defined by a starting tag. If the element contains other content, it ends with a closing tag. <br>
                        For example, <em>&ltp&gt</em> is starting tag of a paragraph and <em>&lt/p&gt</em> is closing tag of the same paragraph but <strong>&ltp&gt This is paragraph &lt/p&gt</strong> is a paragraph element.
                    </div> <br><br>

                    <h4 style="text-indent :3em;">Nested HTML Elements</h4> <br>
                    <div style="text-indent:2em;">
                        It is very much allowed to keep one HTML element inside another HTML element − <br>
                        
                    </div> <br>

                    <div class="code-snippet">
                        <div class="code"> <br>
                            <h4>Example-</h4>
                            <a href="http://tpcg.io/5YwCIFic" target="_blank"><input class="try_it"  type="submit" value="Demo"></a>
                            <script src="https://gist.github.com/AdityaVSM/10e188299ca63b23265ccb19b05281e1.js"></script> <br>                          
                        </div>
                    </div><br><br>

                    <h3 style="text-indent :3em;">Block-level and Inline HTML elements</h3> <br>
                    
                    <h4 style="text-indent :2em;">Block-level element:</h4> <br>
                    <div style="text-indent :1.5em;">
                        <ul>
                            <li>These are the elements, which structure main part of web page, by dividing a page into coherent blocks.</li> <br>
                            <li>A block-level element always start with new line and takes the full width of web page, from left to right.</li> <br>
                            <li>These elements can contain block-level as well as inline elements.</li> <br>
                        </ul> <br>
                        <h6>Following are the block-level elements in HTML:</h6> <br> 
                        <strong> &ltaddress&gt, &ltarticle&gt, &ltaside&gt, &ltblockquote&gt, &ltcanvas&gt, &ltdd&gt, &ltdiv&gt, &ltdl&gt, &ltdt&gt, &ltfieldset&gt, &ltfigcaption&gt, &ltfigure&gt, &ltfooter&gt, &ltform&gt, &lth1&gt-&lth6&gt, &ltheader&gt, &lthr&gt, &ltli&gt, &ltmain&gt, &ltnav&gt, &ltnoscript&gt, &ltol&gt, &ltoutput&gt, &ltp&gt, &ltpre&gt, &ltsection&gt, &lttable&gt, &lttfoot&gt, &ltul&gt</strong> and<strong> &ltvideo&gt.</strong>
                    </div> <br> <br>

                    <h4 style="text-indent :2em;">Inline element:</h4> <br>
                    <div style="text-indent : 1.5em;">
                        <ul>
                            <li>Inline elements are those elements, which differentiate the part of a given text and provide it a particular function.</li> <br> 
                            <li>These elements does not start with new line and take width as per requirement.</li> <br> 
                            <li>The Inline elements are mostly used with other elements.</li> <br>
                        </ul> <br>
                        <h6>Following are the inline elements in HTML:</h6> <br> 
                        <strong> &lta&gt, &ltabbr&gt, &ltb&gt, &ltbdo&gt, &ltbr&gt, &ltbutton&gt, &ltcite&gt, &ltcode&gt, &ltdfn&gt, &ltem&gt, &lti&gt, &ltimg&gt, &ltinput&gt, &ltkbd&gt, &ltlabel&gt, &ltmap&gt, &ltobject&gt, &ltq&gt, &ltsamp&gt, &ltscript&gt, &ltselect&gt, &ltsmall&gt, &ltspan&gt, &ltstrong&gt, &ltsub&gt, &ltsup&gt, &lttextarea&gt, &lttime&gt, &ltvar&gt. </strong>
                    </div>                 
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