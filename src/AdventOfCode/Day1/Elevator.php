<?php

namespace VFDev\AdventOfCode\Day1;

class Elevator
{
    protected $floorNumber = 0;

    public function getFloorNumber()
    {
        return $this->floorNumber;
    }

    public function goUp()
    {
        $this->floorNumber++;

        return $this;
    }

    public function goDown()
    {
        $this->floorNumber--;

        return $this;
    }
}
