<?php

namespace VFDev\AdventOfCode\Day2;

use VFDev\AdventOfCode\Day2\PresentBox;
use VFDev\AdventOfCode\Day2\BoxCollection;

class Puzzle2
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

        echo 'The total ribbon paper area need is ' . $boxCollection->getTotalRibbonPaperArea() . " square feet.\n\n";
    }
}
