<?php

namespace VFDev\AdventOfCode\Day1;

use VFDev\AdventOfCode\Day1\Elevator;

class Puzzle1
{
    public function __invoke()
    {
        $instructions = file_get_contents(__DIR__ . '/input_instructions.txt');

        $elevator = new Elevator();

        $elevatorInstructor = new ElevatorIntructorParenthesis($elevator);

        $elevatorInstructor->parseInstructions($instructions);

        $currentFloorNumber = $elevator->getFloorNumber();

        echo 'The Current Floor is : ' . $currentFloorNumber . "\n\n";
    }
}
