<?php

namespace VFDev\AdventOfCode\Day4;

class AdventCoinGenerator
{
    protected $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function generateCoin()
    {
        $index = 1;
        
        while (true) {
            $string = $this->key . $index;

            yield $string;

            $index++;
        }
    }
}
