<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 29/12/2016
 * Time: 9:52 AM
 */

class MysqlException extends Exception
{

    private $log_file = 'mysql_errors.txt';

    public function __construct($db)
    {
        $code = mysqli_errno($db);
        $message = mysqli_error($db);

        if ($fp = fopen($this->log_file, 'a'))
        {
            $log_msg = date('[y-m-d H:m:s]')." Code: $code - "." Message: $message\n";

            fwrite($fp, $log_msg);

            fclose($fp);
        }

        parent::__construct($message, $code);
    }

}