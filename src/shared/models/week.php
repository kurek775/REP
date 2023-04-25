<?php

class Week
{
    public $num;
    public $days = array();

    function __construct($num,$days)
    {
        $this->num = $num;
        $this->days = $days;
    }

    function addDay($day)
    {
        array_push($this->days, $day);
    }
}


?>