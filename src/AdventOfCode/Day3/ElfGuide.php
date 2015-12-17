<?php

namespace VFDev\AdventOfCode\Day3;

use VFDev\AdventOfCode\Day3\Santa;

class ElfGuide
{
    protected $santas = [];

    protected $directionsLookup = array(
        '^' => 'moveNorth',
        'v' => 'moveSouth',
        '<' => 'moveWest',
        '>' => 'moveEast'
    );

    public function __construct($santas)
    {
        $this->santas = $santas;
    }

    public function readDirections($directions)
    {
        if (!is_array($this->santas)) {
            foreach (str_split($directions) as $direction) {
                $this->tellSantaToMove($direction, $this->santas);
            }   
        } else {
            $this->readDirectionsAlternatively($directions);
        }
    }

    private function readDirectionsAlternatively($directions)
    {
        foreach (str_split($directions) as $direction) {
            $current_santa = (isset($current_santa) && $current_santa <= count($this->santas) - 1) ? $current_santa : 0;

            $this->tellSantaToMove($direction, $this->santas[$current_santa]); 

            $current_santa++;
        }
    }

    private function tellSantaToMove($direction, Santa $santa)
    {
        $directionMethodName = $this->getDirectionMethodName($direction);

        $santa->{$directionMethodName}();
    }

    private function getDirectionMethodName($direction)
    {
        if (array_key_exists($direction, $this->directionsLookup)) {
            return $this->directionsLookup[$direction];
        }

        throw new \Exception('Sorry Direction could not be found!');
    }

    public function getSantas()
    {
        return $this->santas;
    }
}
