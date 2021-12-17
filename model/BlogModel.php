<?php
class BlogModel
{

    private $id;
    private $image_banner;
    private $title;
    private $description;
    private $author;
    private $date;
    private $category;
    private $link;
    private $sub_category;

    function __construct($id, $image_banner, $title, $description, $author, $date, $category, $link, $sub_category)
    {
        $this->id = $id;
        $this->image_banner = $image_banner;
        $this->title = htmlspecialchars($title);
        $this->description = htmlspecialchars($description);
        $this->author = htmlspecialchars($author);
        $this->date = $date;
        $this->category = htmlspecialchars($category);
        $this->link = $link;
        $this->sub_category = htmlspecialchars($sub_category);
    }

    function getId()
    {
        return $this->id;
    }

    function getImageBanner()
    {
        return $this->image_banner;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getDate()
    {
        return date_format(date_create($this->date), "F d, Y");
    }

    function getCategory()
    {
        return $this->category;
    }

    function getLink()
    {
        return $this->link;
    }

    function getSubCategory()
    {
        return $this->sub_category;
    }

    function getCard()
    {
        $card = "
        <li class='list-group-item border-0 mt-4 mt-sm-5'>
            <a href='blog-read.php?id=" . $this->id . "' style='text-decoration: none;'>

                <div class='row'>
                    <div class='col'>
                        <img class='img-fluid mb-3' alt='Banner' src='" . $this->image_banner . "' width='1366' height='768'>
                    </div>
                </div>
                <div class='row'>
                    <div class='col'>
                        <h1 class='mb-1' style='font-size: 1rem; color: #000000;'>" . $this->title . "</h1>
                        <p class='mb-1' style='font-size: 1rem; color: #636e72;'>" . $this->description . "</p>
                    </div>
                </div>
            </a>
        </li>
        ";
        return $card;
    }
}
