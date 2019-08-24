<?php
    require_once("connect.php");
    if(isset($_REQUEST['signupBtn'])){
        $fname = htmlentities($_REQUEST['fname']);
        $lname = htmlentities($_REQUEST['lname']);
        $email_addr = htmlentities($_REQUEST['email_addr']);
        $user_pwd = htmlentities($_REQUEST['user_pwd']);
        $encrypt_pwd = md5(sha1($user_pwd));
        $authentication = md5(sha1($user_pwd.$email_addr));
        
        $insertQuery = "INSERT INTO userinformation(fname,lname,email_addr,user_pwd,authentication) VALUES('$fname','$lname','$email_addr','$encrypt_pwd','$authentication')";
        
        $runQuery = mysqli_query($dbconnection,$insertQuery);
        
        if( $runQuery == true){
            header("location: login.php?success");
        }else{
            header("location: signup.php?warning");
        }
    }
?>