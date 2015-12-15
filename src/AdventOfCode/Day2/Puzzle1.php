<?php

namespace VFDev\AdventOfCode\Day2;

use VFDev\AdventOfCode\Day2\PresentBox;
use VFDev\AdventOfCode\Day2\BoxCollection;

class Puzzle1
{
    public function __invoke()
    {
        $input_box_dimensions = file(__DIR__ . '/input.txt');

        $boxCollection = new BoxCollection();

        foreach ($input_box_dimensions as $boxDimensions) {
            $box = new PresentBox($boxDimensions);

            $boxCollection->addBox($box);
        }

        echo 'We have a total number of ' . $boxCollection->count() . " boxes.\n\n";

        echo 'The total wrapping paper area need is ' . $boxCollection->getTotalWrappingPaperArea() . " square feet.\n\n";
    }
}
