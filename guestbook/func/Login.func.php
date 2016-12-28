<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 27/12/2016
 * Time: 11:51 AM
 */

include_once ("../common.php");

if (isset($_POST['username']) && isset($_POST['password']))
{
    login($_POST['username'], $_POST['password']);

}else{

    echo 'Error occur: Params invalid';
}


function login($username, $password)
{
    global $_DB;
    $query = "SELECT id, username, password from TB_User WHERE username = '$username' and password = '$password'";

    echo $query;

    if ($query_run = mysqli_query($_DB, $query))
    {
        if ($query_row = mysqli_fetch_assoc($query_run))
        {
            $db_user_id = $query_row['id'];
            $db_username = $query_row['username'];
            //$user = new User($db_user_id, $db_username);

            $_SESSION['userInfo']['user_id'] = $db_user_id;
            $_SESSION['userInfo']['user_name'] = $db_username;

            header('Location: '.'../');
        }else{

            echo "<br>登录失败";
        }
    }else{
        echo mysqli_error();
    }
}

function logout()
{


}