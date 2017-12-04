<?php

namespace VFDev\AdventOfCode2017\Day1;

class Puzzle1
{
    public function __invoke()
    {
        $instructions = file_get_contents(__DIR__ . '/input_instructions.txt');

        $sumParser = new CaptchaStringParser();

        $result = $sumParser->parseSum($instructions);

        echo 'The Captcha result is: ' . $result . "\n\n";
    }
}
