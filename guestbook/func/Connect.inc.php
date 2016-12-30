<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 27/12/2016
 * Time: 4:08 PM
 */

$_DB = null;

common_db_mysql_connect();

function common_db_mysql_connect() {

    global  $_DB;

    $mysql_host = 'localhost';
    $mysql_user = 'test';
    $mysql_pass = '111111';
    $mysql_db = 'guestbook';
    $mysql_port = 3306;

    $_DB = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db, $mysql_port);

    if (!$_DB) {
        die('Can not connect.');
    }

    //echo 'Connected';
}