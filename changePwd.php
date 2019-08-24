<?php require_once("header.php");?>
<br>
<b style="color:green">
    <?php
        if(isset($_REQUEST['changePwd'])){
            echo $_REQUEST['changePwd'];
        }elseif($_REQUEST['dontmatch']){
            echo $_REQUEST['dontmatch'];
        }
    ?>
</b>
<br>
<form action="changePwd_core.php" method="post">
    <input type="text" name="oldpwd" placeholder="old password">
    <input type="text" name="newpwd" placeholder="new password">
    <input type="text" name="cfmpwd" placeholder="confirm password">
    <input type="submit" value="change password" name="pwdchangeBtn">
</form>

<?php require_once("footer.php");?>