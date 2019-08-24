    <?php
        require_once("connect.php");
        session_start();
        if(isset($_COOKIE['currentUser'])){
        $currentAuth = $_COOKIE['currentUser'];
        
        $checkdbAuth = "SELECT * FROM userinformation WHERE authentication='$currentAuth'";
        $runcheckAuth = mysqli_query($dbconnection,$checkdbAuth);
        if(mysqli_num_rows($runcheckAuth) == 0){
            setcookie("currentUser","",time()-(70*86400));
            header("location: login.php");
        }
        }
    ?>
   <div id="header">
    <h1>Welcome to my site</h1>
    <a href="new.php">Home</a>
    <?php
        if(isset($_COOKIE['currentUser'])){
            echo '<a href="profile.php">Profile</a>';
        }   
    ?>
    
    <?php
        if(!isset($_COOKIE['currentUser'])){
            echo '<a href="login.php">Login</a>';
        }else{
            echo '<a href="logout.php">Logout</a>';
        }  
    ?>
    
    <?php
        if(!isset($_COOKIE['currentUser'])){
            echo '<a href="signup.php">SignUp</a>';
        }   
    ?>
    
   
</div>