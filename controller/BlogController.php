<?php
include "model/DatabaseHandler.php";
include "model/BlogModel.php";

class BlogController{
    
    public static function getAllData(){
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM blog");
        $data_array = self::compileToArray($statement);
        return $data_array;
    }
    
    public static function getDataFromTitle($title){
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM blog WHERE title LIKE ?");
        $title.= "%";
        $statement->bind_param("s", $title);
        $data_array = self::compileToArray($statement);
        return $data_array;
    }
    
    public static function getDataFromCategory($category){
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM blog WHERE category=?");
        $statement->bind_param("s", $category);
        $data_array = self::compileToArray($statement);
        return $data_array;
    }
    
    public static function getDataFromTitleCategory($title){
        $mysqli = DatabaseHandler::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM blog WHERE title LIKE ? AND category=?");
        $title.= "%";
        $statement->bind_param("ss", $title, $category);
        $data_array = self::compileToArray($statement);
        return $data_array;
    }
    
    private static function compileToArray($statement){
        $statement->execute();
                $statement->bind_result($id, $image_banner, $title, $description, $author, $date, $category, $link);
        $data_array = [];
        while($statement->fetch()){
            array_push($data_array, new BlogModel($id, $image_banner, $title, $description, $author, $date, $category, $link));
        }
        return $data_array;
    }
    
    public static function connectionWorking(){
        $mysqli = DatabaseHandler::getConnection();
        return !$mysqli->connect_errno;
    }
    
}
?>