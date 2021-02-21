<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Latest news</title>

        <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

  <body style="background-color:white;">
    <nav class="navbar navbar-light bg-dark justify-content-between" >
		<a style="color:white" class="navbar-brand" href="index.php">Home</a>
		<a style="color:white" class="navbar-brand" href="signup.php">Sign Up</a>
		<a style="color:white" class="navbar-brand" href="login.php">Login</a>
		<a style="color:white" class="navbar-brand" href="logout.php">Logout</a>
		<a style="color:white" class="navbar-brand" href="profile.php">View profile</a>
		<a style="color:white" class="navbar-brand" href="news.php" target="_blank">News</a>
        <a style="color:white" class="navbar-brand" href="bookmark.php" target="_blank">Bookmarks</a>

	</nav> <br><br>


        <div class="grid-child-content">
            <h1 style="text-indent:10em">Latest Tech News</h1>
            <div class="news">
                <header>
                </header>
            </div>
            
        </div>       
         
      

    <script>
    const header = document.querySelector('header');
    const section = document.querySelector('section');
    
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myArr = JSON.parse(this.responseText);
            for(var i = 0; i < myArr.length; i++) {
                let requestURL = 'https://hacker-news.firebaseio.com/v0/item/'+myArr[i].toString()+'.json?print=pretty';
                let request = new XMLHttpRequest();
                request.open('GET', requestURL);
                request.responseType = 'json';
                request.send();

                request.onload = function() {
                    var response = request.response;
                    populateHeader(response);
                }

                function populateHeader(obj) {
                    var title = obj['title'];
                    var ul = obj['url']; 
                    var kids = obj['kids'];  

                    
                    var mya = document.createElement('a');
                    mya.href = ul;
                    mya.target = '_blank';
                    mya.innerHTML = title; 
                    header.appendChild(mya);

                    var mySpan = document.createElement('span');
                    mySpan.innerHTML = "| by: "+obj['by']+" | ";
                    header.appendChild(mySpan);

                    var myBr = document.createElement('br');
                    header.appendChild(myBr);                  

                    var myHr = document.createElement('hr');
                    header.appendChild(myHr);

                    
                }
            }      
        }
    };
    xmlhttp.open("GET", "https://hacker-news.firebaseio.com/v0/topstories.json?print=pretty", true);
    xmlhttp.send();   

    </script>
  </body>
</html>