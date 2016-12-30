<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 29/12/2016
 * Time: 9:20 AM
 */

set_exception_handler("exception_hander");

function exception_hander(Exception $e)
{
    echo "Funck: Something went wrong with the website.";

    echo "<!-- Uncaught exception: ". $e->getMessage() ." -->";
}

function circle_area($radius)
{
    if ($radius < 0) {
        throw new Exception('Invalid Radius ' . $radius);
    } else {
        return pi() * $radius * $radius;
    }
}

//try{
    echo circle_area(-2);
//}
//catch (Exception $exception)
//{
//    echo $exception->getMessage();
//}



