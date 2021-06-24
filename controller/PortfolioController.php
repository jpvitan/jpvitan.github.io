<?php
include "model/DatabaseHandler.php";
include "model/PortfolioModel.php";

class PortfolioController
{
    private static $platforms = "'Mobile','Web','Desktop'";

    public static function getAllData()
    {
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM portfolio");
        $data_array = self::compileToArray($statement);
        return $data_array;
    }

    public static function getDataOthers()
    {
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM portfolio WHERE platform NOT IN (" . self::$platforms . ")");
        $data_array = self::compileToArray($statement);
        return $data_array;
    }

    public static function getDataOthersWithTitle($title)
    {
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM portfolio WHERE title LIKE ? AND platform NOT IN (" . self::$platforms . ")");
        $title .= "%";
        $statement->bind_param("s", $title);
        $data_array = self::compileToArray($statement);
        return $data_array;
    }

    public static function getDataFromTitle($title)
    {
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM portfolio WHERE title LIKE ?");
        $title .= "%";
        $statement->bind_param("s", $title);
        $data_array = self::compileToArray($statement);
        return $data_array;
    }

    public static function getDataFromPlatform($platform)
    {
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM portfolio WHERE platform=?");
        $statement->bind_param("s", $platform);
        $data_array = self::compileToArray($statement);
        return $data_array;
    }

    public static function getDataFromTitlePlatform($title, $platform)
    {
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM portfolio WHERE title LIKE ? AND platform=?");
        $title .= "%";
        $statement->bind_param("ss", $title, $platform);
        $data_array = self::compileToArray($statement);
        return $data_array;
    }

    private static function compileToArray($statement)
    {
        $statement->execute();
        $statement->bind_result($id, $image_banner, $title, $description, $technologies_used, $platform, $link);
        $data_array = [];
        while ($statement->fetch()) {
            array_push($data_array, new PortfolioModel($id, $image_banner, $title, $description, $technologies_used, $platform, $link));
        }
        return $data_array;
    }

    public static function connectionWorking()
    {
        $mysqli = DatabaseHandler::getConnection();
        return !$mysqli->connect_errno;
    }
}
