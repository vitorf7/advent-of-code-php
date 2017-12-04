<?php

namespace VFDev\AdventOfCode2017\Day1;

class CaptchaStringParser2
{
    private $index;
    private $numbers;

    public function parseSum($input)
    {
        $this->numbers = str_split($input);
        $numEntries = count($this->numbers);
        $result = 0;

        for ($this->index = 0; $this->index < $numEntries; $this->index++) {
            $result += $this->matchesNumberAhead() ? $this->numbers[$this->index] : 0;
        }

        return $result;
    }

    private function matchesNumberAhead()
    {
        $indexToCheck = $this->index + (count($this->numbers) /2);
        $indexDifference = count($this->numbers) - $indexToCheck;


        return $indexDifference > 0 && $this->numbers[$this->index] === $this->numbers[$indexToCheck] || $indexDifference <= 0 &&
            $this->numbers[$this->index] === $this->numbers[abs($indexDifference)];
    }
}
