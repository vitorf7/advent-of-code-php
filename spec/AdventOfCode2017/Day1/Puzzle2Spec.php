<?php

namespace spec\VFDev\AdventOfCode2017\Day1;

use VFDev\AdventOfCode2017\Day1\Puzzle2;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Puzzle2Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Puzzle2::class);
    }
}
