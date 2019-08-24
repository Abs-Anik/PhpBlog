<?php
    $dbhostname = "localhost";
    $dbusername = "anik";
    $dbuserpwd = "anik";
    $dbname = "userdb";

    $dbconnection = mysqli_connect($dbhostname,$dbusername,$dbuserpwd,$dbname);

    if($dbconnection == false){
        echo "<strong>Database connection is not valid</strong>";
    }
?>



