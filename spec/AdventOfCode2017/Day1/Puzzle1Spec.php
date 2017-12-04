<?php

namespace spec\VFDev\AdventOfCode2017\Day1;

use VFDev\AdventOfCode2017\Day1\Puzzle1;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Puzzle1Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Puzzle1::class);
    }
}
