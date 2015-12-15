<?php

namespace VFDev\AdventOfCode\Day3;

use VFDev\AdventOfCode\Day3\Grid;
use VFDev\AdventOfCode\Day3\Santa;
use VFDev\AdventOfCode\Day3\ElfGuide;

class Puzzle2
{
    public function __invoke()
    {
        $grid = new Grid();
        $santa = new Santa($grid);
        $roboSanta = new Santa($grid);
        $elfGuide = new ElfGuide([$santa, $roboSanta]);

        $directionsInput = file_get_contents(__DIR__ . '/input.txt');

        $elfGuide->readDirections($directionsInput);

        echo "The number of houses visited by Santa and Robo Santa was: " . $grid->getHouseVisits() . "\n\n";
    }
}
