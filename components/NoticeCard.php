<?php
class NoticeCard
{
    private $icon;
    private $message;
    private $style;

    function __construct($icon, $message, $style)
    {
        $this->icon = $icon;
        $this->message = $message;
        $this->style = $style;
    }

    function generate()
    {
        return "<div class='notice-card card border-0 px-md-4 py-4' style='{$this->style}'><div class='container-fluid'><div class='row'><div class='col-auto my-auto'>{$this->icon}</div><div class='col my-auto'><p>{$this->message}</p></div></div></div></div>";
    }
}
