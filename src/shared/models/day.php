<?php

class Day
{
    public $num;
    public $exercises = array();

    function __construct($num,$exercises)
    {
        $this->num = $num;
        $this->exercises = $exercises;
    }

    function addExercise($exercise)
    {
        array_push($this->exercises, $exercise);
    }
}


?>