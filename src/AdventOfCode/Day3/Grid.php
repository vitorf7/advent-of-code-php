<?php

namespace VFDev\AdventOfCode\Day3;

class Grid
{
    protected $visits = 0;

    protected $houses = array();

    public function getHouseVisits()
    {
        return $this->visits;
    }

    public function visit($x, $y)
    {
        if (! isset($this->houses[$x][$y])) {
            $this->visits++;
            $this->houses[$x][$y] = true;
        }
    }
}
