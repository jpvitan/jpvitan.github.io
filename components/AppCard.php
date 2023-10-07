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
        return "<div class='card-app card border-0 px-4 px-md-5 py-5' style='{$this->style}'><img class='icon shadow mb-4' alt='{$this->title}' src='{$this->icon}' width='60' height='60'><div class='row mb-3'><div class='col my-auto'><p class='text-size-lg text-color-black fw-bold mb-1'>{$this->title}</p><p class='text-size-sm fw-bold mb-0'>{$this->platform}</p></div><div class='col-auto my-auto'><a class='text-size-xs button-pill button-pill-seashell btn' href='{$this->link}'>View</a></div></div><p class='text-size-sm'>{$this->description}</p></div>";
    }
}
