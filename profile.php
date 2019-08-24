        <?php
            if(!isset($_COOKIE['currentUser'])){
                header("location: login.php");
            }
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Login</title>
            <link rel="stylesheet" href="style.css">
        </head>

        <body>
            <div id="wrapper">
                <?php require_once("header.php");?>
                <div id="content">
                  <br><br>
                   <a href="changePwd.php">Change Password</a>
                    <h1>
                        
                        <?php
                            if(isset($_COOKIE['currentUser'])){
                                $targetuser = $_COOKIE['currentUser'];
                                
                                $showQuery = "SELECT * FROM userinformation WHERE authentication='$targetuser'";
                                
                                $runQuery = mysqli_query($dbconnection,$showQuery);
                                
                                if($runQuery == true){
                                    while($fetchvalue = mysqli_fetch_array($runQuery)){
                                        echo $fetchvalue['fname']." ".$fetchvalue['lname'];
                                        echo "</h1>";
                                        $profilepic = $fetchvalue['avatar'];
                                        echo "<img src='avatar/$profilepic' alt='Md. Abu Bakkar Siddik'/>";
                                    }
                                }
                            }
                        ?>
                        
                    
                    <p>Hello Everyone</p>
                    
                </div>
                <?php require_once("footer.php");?>
            </div>
        </body>

        </html>