<?php

namespace VFDev\AdventOfCode\Day3;

use VFDev\AdventOfCode\Day3\Grid;

class Santa
{
    protected $grid;

    protected $x = 0;
    protected $y = 0;

    public function __construct(Grid $grid)
    {
        $this->grid = $grid;
        $this->visit();
    }

    private function visit()
    {
        $this->grid->visit($this->x, $this->y);
    }

    public function moveWest()
    {
        $this->x--;

        $this->visit();
    }

    public function moveEast()
    {
        $this->x++;

        $this->visit();
    }

    public function moveNorth()
    {
        $this->y++;

        $this->visit();
    }

    public function moveSouth()
    {
        $this->y--;

        $this->visit();
    }
}
