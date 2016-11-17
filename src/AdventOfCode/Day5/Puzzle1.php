<?php

namespace VFDev\AdventOfCode\Day5;


class Puzzle1
{
    public function __invoke()
    {
        $parser = new NaughtyOrNiceStringParser();
        $stringInput = file_get_contents(__DIR__ . '/input.txt');

        $parser->parse($stringInput);
        $naughty = $parser->naughtyStrings();
        $nice = $parser->niceStrings();

        echo "The number of nice strings is: {$nice} and the number of naughty strings is: {$naughty} \n\n";
    }
}