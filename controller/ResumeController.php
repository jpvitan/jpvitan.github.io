<?php
include "model/DatabaseHandler.php";
include "model/ResumeModel.php";

class ResumeController
{

    public static function getAllData()
    {
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM document");
        $data_array = self::compileToArray($statement);
        $mysqli->close();
        return $data_array;
    }

    public static function getDataFromTitle($title)
    {
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM document WHERE title LIKE ?");
        $title .= "%";
        $statement->bind_param("s", $title);
        $data_array = self::compileToArray($statement);
        $mysqli->close();
        return $data_array;
    }

    private static function compileToArray($statement)
    {
        $statement->execute();
        $statement->bind_result($id, $image_banner, $title, $description, $file_type, $file_size, $link);
        $data_array = [];
        while ($statement->fetch()) {
            array_push($data_array, new ResumeModel($id, $image_banner, $title, $description, $file_type, $file_size, $link));
        }
        return $data_array;
    }

    public static function connectionWorking()
    {
        $mysqli = DatabaseHandler::getConnection();
        $status = !$mysqli->connect_errno;
        $mysqli->close();
        return $status;
    }
}
