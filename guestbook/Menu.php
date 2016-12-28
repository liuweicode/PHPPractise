<?php

if (!empty($_SESSION['userInfo']['user_id']) && !empty($_SESSION['userInfo']['user_name']))
{
    //$user = (User)$_SESSION['user'];

    echo "<div style=\"text-align: right; width: 70%;\">";
    echo 'Welcome, '.$_SESSION['userInfo']['user_name'];
    echo '    <a href=./Loginout.php>Exit</a>';
    echo  '</div>';
}else{
    echo "<div style=\"text-align: right; width: 70%;\">";
    echo 'You are not login, please <a href=./Login.php>Login</a>';
    echo  '</div>';
}

?>