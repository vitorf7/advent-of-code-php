<?php

namespace VFDev\AdventOfCode2017\Day1;

class Puzzle2
{
    public function __invoke()
    {
        $instructions = file_get_contents(__DIR__ . '/input_instructions_2.txt');

        $sumParser = new CaptchaStringParser2();

        $result = $sumParser->parseSum($instructions);

        echo 'The Captcha result is: ' . $result . "\n\n";
    }
}
