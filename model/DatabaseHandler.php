<?php
class DatabaseHandler{
    
    private static $host = "localhost";
    private static $dbname = "jpvitan1_site";

    // For production server: 
//    private static $username = "jpvitan1_master";
//    private static $password = "!M,xxii*MKRR";
    
    // For local server:
    private static $username = "root";
    private static $password = "";    
    
    public static function getConnection(){
        return new mysqli(self::$host, self::$username, self::$password, self::$dbname);
    }
    
}
?>