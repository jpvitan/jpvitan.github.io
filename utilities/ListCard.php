<?php
class ListCard
{
    private $icon;
    private $title;
    private $items;
    private $marker;
    private $style;

    function __construct($icon, $title, $items, $marker, $style)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->items = $items;
        $this->marker = $marker;
        $this->style = $style;
    }

    function generate()
    {
        $itemRows = "";
        foreach ($this->items as $item) {
            $itemRows .= "<div class='item-row row mt-2'><div class='col-auto my-auto'>{$this->marker}</div><div class='col my-auto'><p>{$item}</p></div></div>";
        }

        return "<div class='list-card card shadow-lg border-0' style='{$this->style}'><div class='container-fluid px-5 py-5'><div class='icon-row row justify-content-center'><div class='col-auto my-auto'>{$this->icon}</div></div><div class='title-row row mt-4'><div class='col-auto my-auto'><h4>{$this->title}</h4></div></div>{$itemRows}</div></div>";
    }
}
