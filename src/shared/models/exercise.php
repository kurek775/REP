<?php

class Exercise
{
    public $name;
    public $sets = array();

    function __construct($name, $sets)
    {
        $this->name = $name;
        $this->sets = $sets;
    }

    function addSet($set)
    {
        array_push($this->sets, $set);
    }
}

class Set
{
    public $reps;
    public $weight;
    public $rpe;

    function __construct($reps, $weight, $rpe)
    {
        $this->reps = $reps;
        $this->weight = $weight;
        $this->rpe = $rpe;
    }
}

?>