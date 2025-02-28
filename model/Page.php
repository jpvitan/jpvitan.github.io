<?php
require_once "database/Database.php";

class Page
{
    private $id;
    private $url;
    private $title;
    private $description;
    private $color;
    private $image;
    private $author;

    function getId()
    {
        return $this->id;
    }

    function getURL()
    {
        return $this->url;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getColor()
    {
        return $this->color;
    }

    function getImage()
    {
        return $this->image;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function setId($id)
    {
        return $this->id = $id;
    }

    function setURL($url)
    {
        return $this->url = $url;
    }

    function setTitle($title)
    {
        return $this->title = $title;
    }

    function setDescription($description)
    {
        return $this->description = $description;
    }

    function setColor($color)
    {
        return $this->color = $color;
    }

    function setImage($image)
    {
        return $this->image = $image;
    }

    function setAuthor($author)
    {
        return $this->author = $author;
    }

    static function findAll()
    {
        $array = [];

        $mysqli = Database::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM page");
        $statement->execute();
        $statement->bind_result($id, $url, $title, $description, $color, $image, $author);
        while ($statement->fetch()) {
            $page = new Page();
            $page->setId($id);
            $page->setURL($url);
            $page->setTitle($title);
            $page->setDescription($description);
            $page->setColor($color);
            $page->setImage($image);
            $page->setAuthor($author);
            array_push($array, $page);
        }
        $mysqli->close();

        return $array;
    }

    static function findById($id)
    {
        $page = new Page();

        $mysqli = Database::getConnection();
        $statement = $mysqli->prepare("SELECT * FROM page WHERE id=?");
        $statement->bind_param("i", $id);
        $statement->execute();
        $statement->bind_result($id, $url, $title, $description, $color, $image, $author);
        if ($statement->fetch()) {
            $page->setId($id);
            $page->setURL($url);
            $page->setTitle($title);
            $page->setDescription($description);
            $page->setColor($color);
            $page->setImage($image);
            $page->setAuthor($author);
        }
        $mysqli->close();

        return $page;
    }
}
