<?php

namespace VFDev\AdventOfCode2017\Day1;

class CaptchaStringParser
{
    private $numbers;
    private $index;

    public function parseSum($input)
    {
        $this->numbers = str_split($input);
        $numEntries = count($this->numbers);
        $result = 0;

        for ($this->index = 0; $this->index < $numEntries; $this->index++) {
            if ($this->matchesNextNumber()) {
                $result += $this->numbers[$this->index];
            }

            if ($this->lastNumberMatchesFirstNumber()) {
                $result += $this->numbers[$this->index];
            }
        }

        return $result;
    }

    private function matchesNextNumber()
    {
        return $this->index !== (count($this->numbers) - 1) && $this->numbers[$this->index] === $this->numbers[$this->index+1];
    }

    private function lastNumberMatchesFirstNumber()
    {
        return $this->index === (count($this->numbers) - 1) && $this->numbers[$this->index] === $this->numbers[0];
    }
}
