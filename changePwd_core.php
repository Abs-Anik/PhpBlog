<?php

    require_once("connect.php");
    $getCurrentUser = $_COOKIE['currentUser'];
    $oldpwd = htmlentities($_REQUEST['oldpwd']);
    $newpwd = htmlentities($_REQUEST['newpwd']);
    $cfmpwd = htmlentities($_REQUEST['cfmpwd']);


    $checkoldpwd = "SELECT * FROM userinformation WHERE authentication='$getCurrentUser'";
    $runQuery = mysqli_query($dbconnection,$checkoldpwd);

    if($runQuery == true){
       if(mysqli_num_rows($runQuery) === 1){
           while($getCurrentUserdata = mysqli_fetch_array($runQuery)){
                $userEmail = $getCurrentUserdata['email_addr'];
           }
       }
    }

    $generateAuth = md5(sha1($oldpwd.$userEmail));

    if($generateAuth==$getCurrentUser && $newpwd==$cfmpwd){
       $haspwd = md5(sha1($cfmpwd));
       $newAuth = md5(sha1($newpwd.$userEmail));
        
       $updatePwd = "UPDATE userinformation SET user_pwd='$haspwd',authentication='$newAuth'";
        
       $runQuery = mysqli_query($dbconnection,$updatePwd);
        
        if($runQuery == true){
            setcookie("currentUser","",time()-(70*86400));
            setcookie("currentUser",$newAuth,time()+(7*86400));
            header("location: changePwd.php?changePwd=password changed");
        }
    }else{
        header("location: changepwd.php?dontmatch=password did not match");
    }

?>