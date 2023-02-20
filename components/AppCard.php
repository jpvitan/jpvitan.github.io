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
}
