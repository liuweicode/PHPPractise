<?php
    if (!empty($_SESSION['userInfo']['user_id']) && !empty($_SESSION['userInfo']['user_name'])) {

        ?>

        <div style="text-align: right; width: 70%">
            Welcome,
        </div>

        <?php
    }else {
        ?>
        <div style="text-align: right; width: 70%">
            You are not login, please <a href=./Login.php>Login</a> or <a href="./Register.php">Register</a>
        </div>
        <?php
    }
?>
