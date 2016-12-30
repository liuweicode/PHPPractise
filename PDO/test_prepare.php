<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 29/12/2016
 * Time: 11:47 AM
 */

class MessageEntry
{
    public $id, $u_id, $content, $create_time,
        $entry;

    public function __construct()
    {
        $this->entry = "$this->id posted $this->content";
    }
}


//print_r(PDO::getAvailableDrivers());

header("Content-Type:text/html; charset=gb2312");

try{
    $handler = new PDO('mysql:host=127.0.0.1;dbname=guestbook', 'root', '111111');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $handler->exec("SET NAMES 'utf8'");
}
catch (PDOException $exception)
{
    echo 'Sorry, database problem '.$exception->getMessage();
    die();
}

//$handler->query("SET NAMES 'UTF8'");

$u_id = 2;
$content = "离子";
$create_time = 10000;

$sql = "INSERT INTO TB_Message (u_id, content, create_time) VALUES (?, ?, ?)";

try {
    $query = $handler->prepare($sql);
    $query->execute(array(
        $u_id,
        $content,
        $create_time
    ));
}
catch (PDOException $exception)
{
    echo 'Sorry, database problem '.$exception->getMessage();
    die();
}

