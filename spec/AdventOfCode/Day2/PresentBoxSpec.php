<?php

namespace spec\VFDev\AdventOfCode\Day2;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PresentBoxSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('VFDev\AdventOfCode\Day2\PresentBox');
    }

    function it_should_implement_surface_calculator_interface()
    {
        $this->shouldImplement('VFDev\AdventOfCode\Day2\SurfaceCalculatorInterface');
    }
}
