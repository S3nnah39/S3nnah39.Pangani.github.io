<?php
/*Source: User Authentication Lecture by Professor Wergeles*/

$action = empty($_POST['action']) ? false : $_POST['action'];

switch($action){
    case 'login':
        $username = empty($_POST['username'])? '' : $_POST['username'];
        $password = empty($_POST['password'])? '' : $_POST['password'];

        if($username=='test' && $password =='pass')
        {
            setcookie('userid',$username);
            $response = 'Login: Success';
            #require("mainPage.php");    
            #header("Location: mainPage.php");
            
        }
        else
        {
            if($username!='test')
            {
               $response = 'Login: Fail...Incorrect Username';  
               #require('logBackend.php');
            }
            else if($password!='pass')
            {
               $response = 'Login: Fail...Incorrect Password';  
               #require('logBackend.php');
            }
            else if($username!='test'&& $password != 'pass')
            {
               $response = 'Login: Fail...Incorrect Username and Password';
                #require('logBackend.php');
            }
            else if($username!=' ' && $password != ' ')
            {
               $response = 'Login: Fail...No input';
                #require('logBackend.php');
            }
  
        }
        print $response;
        break;
    case 'logout':  
        setcookie('userid','',1);            
        print 'Logged out';
        break;

    default:
        print "ERROR, default case";
        break;
}

?>