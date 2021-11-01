<?php
include "model/DatabaseHandler.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $mysqli = DatabaseHandler::getConnection();
    $statement = $mysqli->prepare("SELECT * FROM link WHERE id=?");
    $statement->bind_param("i", $id);
    $statement->execute();
    $statement->bind_result($id, $link, $count, $title);
    $statement->fetch();
    $statement->close();

    if (is_null($link)) {
        header("Location: https://jpvitan.com/");
    } else {
        $update_statement = $mysqli->prepare("UPDATE link SET count=count+1 WHERE id=?");
        $update_statement->bind_param("i", $id);
        $update_statement->execute();
        $update_statement->close();

        header("Location: " . $link);
    }
} else {
    header("Location: https://jpvitan.com/");
}
die();
