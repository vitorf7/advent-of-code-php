<?php

namespace VFDev\AdventOfCode\Day1;

use VFDev\AdventOfCode\Day1\Elevator;
use VFDev\AdventOfCode\Day1\ElevatorInstructorInterface;

class ElevatorIntructorParenthesis implements ElevatorInstructorInterface
{
    protected $elevator;

    protected $lookup = [
        '('     => 'goUp',
        ')'     => 'goDown'
    ];

    protected $instructionsCount = 0;

    protected $basementEntryInstructionsLog = array();

    public function __construct(Elevator $elevator)
    {
        $this->elevator = $elevator;
    }

    public function parseInstructions($instructions)
    {
        $instructionsArray = $this->getInstructionsArray($instructions);

        foreach ($instructionsArray as $instruction) {
            $this->instructionsCount++;
            
            $methodName = $this->getMethodName($instruction);

            $this->elevator->{$methodName}();

            $this->logBasementEntries($this->instructionsCount);
        }
    }

    protected function getInstructionsArray($instructions)
    {
        if (is_string($instructions)) {
            return str_split($instructions);
        }

        return $instructions;
    }

    protected function getMethodName($instruction)
    {
        if (array_key_exists($instruction, $this->lookup)) {
            return $this->lookup[$instruction];
        }

        throw new \Exception("This instruction is not recognised!");
    }

    public function getInstructionsCount()
    {
        return $this->instructionsCount;
    }

    public function getFirstBasementEntryInstruction()
    {
        return $this->basementEntryInstructionsLog[0];
    }

    protected function logBasementEntries($instructionsCount)
    {
        $floorNumber = $this->elevator->getFloorNumber();

        if ($floorNumber == -1) {
            array_push($this->basementEntryInstructionsLog, $instructionsCount);
        }
    }
}
