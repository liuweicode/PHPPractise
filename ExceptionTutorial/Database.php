<?php
/**
 * Created by PhpStorm.
 * User: LingJin
 * Date: 29/12/2016
 * Time: 10:15 AM
 */

class Database {

    private static $db;

    /**
     * @return mixed
     */
    public static function getDb()
    {
        return self::$db;
    }

    /**
     * @param mixed $db
     */
    public static function setDb($db)
    {
        self::$db = $db;
    }


    public static function __callStatic($name, $arguments)
    {
        $function = 'mysqli_' . $name;

        if (!function_exists($function))
        {
            throw new Exception('Invalid mysql function: ' . $function);
        }

        $ret = call_user_func_array($function, $arguments);

        if ($ret === false)
        {
            throw  new MysqlException(Database::$db);
        }

        return $ret;
    }
}