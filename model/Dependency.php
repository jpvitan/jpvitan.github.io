<?php
include "database/Database.php";

class Dependency
{
    private $id;
    private $name;
    private $tag;

    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }

    function getTag()
    {
        return $this->tag;
    }

    function read($id)
    {
        $mysqli = Database::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM dependency WHERE id=?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $statement->bind_result($id, $name, $tag);
        if ($statement->fetch()) {
            $this->id = $id;
            $this->name = $name;
            $this->tag = $tag;
        }
        $mysqli->close();
    }
}
