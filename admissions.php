
<?php

    $fName = empty($_GET['theFirstname']) ? '' : $_GET['theFirstname'] ;
    $lName = empty($_GET['theLastname']) ? '' : $_GET['theLastname'] ;
    $birth = empty($_GET['theBirthday']) ? '' : $_GET['theBirthday'] ;
    $grade = empty($_GET['theClass']) ? '' : $_GET['theClass'] ;


    echo "Student Info: ". " ". $fName ." ". $lName. " ". $birth. " ". $grade; 



/*
    Attempted the bonus but I could not connect my instance to mySQL workbench. The instructions on canvas by the Professor are out of date

    Sources:   https://stackoverflow.com/questions/37367992/php-inserting-values-from-the-form-into-mysql
    https://stackoverflow.com/questions/51830396/form-date-input-to-database-with-php-and-mysql
    require_once "db.conf";

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }
    
    $firstname = $mysqli  -> real_escape_string($fName);
    $lastname = $mysqli  -> real_escape_string($lName);
    $born = $mysqli  -> real_escape_string($birth);
    $born = date('m-d-Y', strtotime($born));
    $gradeLevel = $mysqli  -> real_escape_string($grade);
    
    $sql = "INSERT INTO users (firstname, lastname, birthday, class) VALUES ('".$firstname."','".$lastname."','".$born."','".$gradeLevel."')";
  
    $result = mysqli_query($mysqli,$sql);
    print_r(result);
    $mysqli -> close();


*/
?>