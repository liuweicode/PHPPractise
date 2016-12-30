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
}
catch (PDOException $exception)
{
    echo 'Sorry, database problem '.$exception->getMessage();
    die();
}

$handler->query("SET NAMES 'gb2312'");
$query = $handler->query('SELECT * FROM TB_Message');
$query->setFetchMode(PDO::FETCH_CLASS, 'MessageEntry');

/*
while ($rs = $query->fetch())
{
    echo '<pre>', print_r($rs), '</pre>', '<br/>';
}
*/

$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>', print_r($result) ,'</pre>';