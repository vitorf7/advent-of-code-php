<?php

namespace VFDev\AdventOfCode\Day5;

interface NaughtyNiceStringParserInterface
{
    public function parse($string);

    public function niceStrings();

    public function naughtyStrings();
}