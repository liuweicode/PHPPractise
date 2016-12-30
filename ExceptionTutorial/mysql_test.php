<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 29/12/2016
 * Time: 10:25 AM
 */

include ('Database.php');
include ('Mysql_exception.php');

try{

    $link = Database::connect('localhost', 'root', '111111');

    Database::setDb($link);

    Database::select_db($link, "guestbook");

    echo 'Everything was fine.';

}
catch (MysqlException $e)
{
    die('We seem to be having database issue.');

}



