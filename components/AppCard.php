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
        return "<div class='app-card card border-0 px-4 px-md-5 py-5' style='{$this->style}'><img class='icon shadow mb-4' alt='{$this->title}' src='{$this->icon}' width='70' height='70'><div class='row'><div class='col my-auto'><h3>{$this->title}</h3><p class='fw-bold'>{$this->platform}</p></div><div class='col-auto my-auto'><a class='basic-button background-color-clouds font-color-peter-river btn' href='{$this->link}'>View</a></div></div><p>{$this->description}</p></div>";
    }
}
