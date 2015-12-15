<?php

namespace VFDev\AdventOfCode\Day3;

use VFDev\AdventOfCode\Day3\Santa;

class ElfGuide
{
    protected $santa;

    protected $directionsLookup = array(
        '^' => 'moveNorth',
        'v' => 'moveSouth',
        '<' => 'moveWest',
        '>' => 'moveEast'
    );

    public function __construct(Santa $santa)
    {
        $this->santa = $santa;
        var_dump($santa);
    }

    public function readDirections($directions)
    {
        foreach (str_split($directions) as $direction) {
            $directionMethodName = $this->getDirectionMethodName($direction);

            $this->santa->{$directionMethodName}();   
        }
    }

    private function getDirectionMethodName($direction)
    {
        if (array_key_exists($direction, $this->directionsLookup)) {
            return $this->directionsLookup[$direction];
        }

        throw new \Exception('Sorry Direction could not be found!');
    }
}
