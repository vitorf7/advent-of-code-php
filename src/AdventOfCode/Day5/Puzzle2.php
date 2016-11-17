<?php

namespace VFDev\AdventOfCode\Day5;


class Puzzle2
{
    public function __invoke()
    {
        $parser = new NaughtyOrNiceStringParser2();
        $stringInput = file_get_contents(__DIR__ . '/input2.txt');

        $parser->parse($stringInput);
        $naughty = $parser->naughtyStrings();
        $nice = $parser->niceStrings();

        echo "The number of nice strings is: {$nice} and the number of naughty strings is: {$naughty} \n\n";
    }
}