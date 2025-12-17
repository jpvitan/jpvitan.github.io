<?php
class Database
{
    private static $host = "localhost";
    private static $dbname = "jpvitan1_website";
    private static $username = "jpvitan1_master";
    private static $password = "";

    public static function getConnection()
    {
        return new mysqli(self::$host, self::$username, self::$password, self::$dbname);
    }
}
