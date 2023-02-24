<?php
class AppCard
{
    private $icon;
    private $title;
    private $platform;
    private $link;
    private $description;
    private $style;

    function __construct($icon, $title, $platform, $link, $description, $style)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->platform = $platform;
        $this->link = $link;
        $this->description = $description;
        $this->style = $style;
    }

    function generate()
    {
        return "<div class='app-card card border-0 px-4 px-md-5 py-5' style='{$this->style}'><img class='icon shadow mb-4' alt='{$this->title}' src='{$this->icon}' width='70' height='70'><div class='row mb-3'><div class='col my-auto'><p class='title'>{$this->title}</p><p class='fw-bold mb-0'>{$this->platform}</p></div><div class='col-auto my-auto'><a class='button-basic background-color-clouds font-color-peter-river btn' href='{$this->link}'>View</a></div></div><p>{$this->description}</p></div>";
    }
}
