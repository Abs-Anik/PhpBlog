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
                    <h1 id="logintitle">SIGNUP FORM</h1>
                    <div id="loginboxess">
                        <center>
                         <form action="signup_core.php" method="post">
                            <input type="text" placeholder="Enter your first name" name="fname">
                            <br><br>
                            <input type="text" placeholder="Enter your last name" name="lname">
                            <br><br>
                             <input type="email" placeholder="Enter your email name" name="email_addr">
                            <br><br>
                            <input type="password" placeholder="Enter your password" name="user_pwd">
                            <br><br>
                            <input type="submit" id="loginbtn" value="Login" name="signupBtn">
                           <br>
                           <br>
                           <?php
                                if(isset($_REQUEST['warning'])){
                                    echo "<strong style='color:red'>Your registration is not successfull</strong>";
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