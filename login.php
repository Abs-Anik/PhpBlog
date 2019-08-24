        <?php
            if(isset($_COOKIE['currentUser'])){
                header("location: profile.php");
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
                    <h1 id="logintitle">LOGIN FORM</h1>
                    <div id="loginboxess">
                        <center>
                         <form action="login_core.php" method="post">
                            <input type="text" placeholder="Enter your user name" name="username">
                            <br><br>
                            <input type="password" placeholder="Enter your password" name="user_pwd">
                            <br><br>
                            <input type="submit" id="loginbtn" value="Login" name="loginBtn">
                           <br>
                           <br>
                           <?php
                                if(isset($_REQUEST['wronginfo'])){
                                    echo "<strong style='color:red'>Your username and password is error</strong>";
                                } 
                            ?>
                        </form>
                        </center> 
                    </div>
                </div>
                <?php require_once("footer.php");?>
            </div>
        </body>

        </html>