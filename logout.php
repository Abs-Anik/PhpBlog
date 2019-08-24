<?php
    setcookie("currentUser","",time()-(70*86400));
    header("location: login.php");
?>