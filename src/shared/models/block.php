<?php

class Block
{
    public $num;
    public $weeks = array();

    function __construct($num,$weeks)
    {
        $this->num = $num;
        $this->weeks = $weeks;
    }

    function addWeek($week)
    {
        array_push($this->weeks, $week);
    }
}


?>