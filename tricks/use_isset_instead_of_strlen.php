<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 29/12/2016
 * Time: 6:15 PM
 */

$username = "中文";

echo strlen($username), '<br/>';

if (isset($username[5])) {
    echo "true ", $username[5];
}else{
    echo "false";
}