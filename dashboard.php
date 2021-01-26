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
        <script src="videoLoad.js"></script>
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
                <div class="vidHolder">
                    <button class="playVid"><i>&#9658;</i> Play video</button>
                </div>
            </div>
        </div>
        
        <div class="trailer">
            <video controls>
                <source src="images/systemPangani.mp4" type="video/mp4"></video>
            <span class="close">&#10006;</span>
        </div>
        <div id="mainFooter"></div>

    </body>
</html>
        
        