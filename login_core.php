<?php

    require_once("connect.php");
    
    if(isset($_REQUEST['loginBtn'])){
        
        $username = htmlentities($_REQUEST['username']);
        $user_pwd = htmlentities($_REQUEST['user_pwd']);
        
        $authentication = md5(sha1($user_pwd.$username));
        
        $matchQuery = "SELECT * FROM userinformation WHERE authentication='$authentication'";
        
        $runquery = mysqli_query($dbconnection,$matchQuery);
        
        if($runquery == true){
           $countvalue = mysqli_num_rows($runquery);
           if($countvalue == 1){
               setcookie("currentUser","$authentication",time()+(7*86400));
               header("location: profile.php");
           }else{
               header("location: login.php?wronginfo");
           }
       }
       
    }

?>


 