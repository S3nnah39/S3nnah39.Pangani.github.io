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
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="mainFinal.css" type="text/css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="finals.js"></script>
        <script src="teachersDept.js"></script>
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
                <div class="cardHolder">
                    <div id="card1">
                        <br>
                        <h3>Teachers'</h3>
                        <br>
                        <span id="tick">&#10004;</span>
                        <br>
                        <h3>Access</h3>
                    </div>
                    <div id="card2">
                        <a href="#" class="addStudent" onclick="getDept()">List<br>Teachers</a>
                    </div>
                </div>

            </div>
        </div>
        
        <ul class="box-area2"><li></li><li></li><li></li><li></li><li></li><li></li></ul>
        <div id="mainFooter"></div>

    </body>
</html>
        
        