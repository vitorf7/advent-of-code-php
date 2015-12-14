<?php

namespace VFDev\AdventOfCode\Day1;

use VFDev\AdventOfCode\Day1\Elevator;

class Puzzle2
{
    public function __invoke()
    {
        $instructions = file_get_contents(__DIR__ . '/input_instructions.txt');

        $elevator = new Elevator();

        $elevatorInstructor = new ElevatorIntructorParenthesis($elevator);

        $elevatorInstructor->parseInstructions($instructions);

        $instructionNumber = $elevatorInstructor->getFirstBasementEntryInstruction();

        echo 'The First time it entered the basement was at instruction number : ' . $instructionNumber . "\n\n";
    }
}
