<?php

	$username = empty($_COOKIE['userid']) ? '' : $_COOKIE['userid'];

	if (!$username) {
		header("Location: logIn.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Pangani School System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="mainFinal.css" type="text/css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="finals.js"></script>
    </head>
    <body>
        <div id="mainHeader">
            <p id="school">Pangani School System</p>
            <span id="signIn"><a href="#" class="glyphicon glyphicon-user" onclick="alert('You are logged in')"></a></span>
            <span id="signOut" onclick="userSignOut()">Log Out</span>
        </div>
        <div id="line"></div>
        <ul class="box-area"><li></li><li></li><li></li><li></li><li></li><li></li></ul>
        <br><br>
        <div id="mainOptions">
        </div>
        
        <div class="loadOption">
            <div id="container3">
              <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 6</div>
                    <img src="images/pango1.png" class="teamPango" alt="Team Pangani">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 6</div>
                    <img src="images/pango2.png" class="teamPango" alt="Work Done">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 6</div>
                    <img src="images/pango3.png" class="teamPango" alt="More Work Done">
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">4 / 6</div>
                    <img src="images/pango4.png" class="teamPango" alt="TARL">
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">5 / 6</div>
                    <img src="images/pango5.png" class="teamPango" alt="Progress report">
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">5/ 6</div>
                    <img src="images/pango6.png" class="teamPango" alt="Appreciation">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

              </div>
                <br>

                <div class="dotHolder">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 
                    <span class="dot" onclick="currentSlide(5)"></span> 
                    <span class="dot" onclick="currentSlide(6)"></span> 
                </div>
            </div>
        </div>
        
        <div id="mainFooter"></div>

    </body>
</html>