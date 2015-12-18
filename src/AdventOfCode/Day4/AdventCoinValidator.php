<?php

namespace VFDev\AdventOfCode\Day4;

class AdventCoinValidator
{
    protected $validationString;

    public function __construct($validationString)
    {
        $this->validationString = $validationString;
    }

    public function isValid($string)
    {
        return strpos($string, $this->validationString) === 0;
    }
}
