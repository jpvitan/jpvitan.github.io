<?php
class Navigation
{
    private $icon;
    private $title;
    private $link;

    function __construct($icon, $title, $link)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->link = $link;
    }

    function generate()
    {
        return "<div class='col-md-auto text-center mt-5 px-5'><a href='{$this->link}'><div class='icon-container mx-auto'>{$this->icon}</div></a><p>{$this->title}</p></div>";
    }
}
