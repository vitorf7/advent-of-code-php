<?php

namespace spec\VFDev\AdventOfCode2017\Day1;

use VFDev\AdventOfCode2017\Day1\CaptchaStringParser2;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CaptchaStringParser2Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CaptchaStringParser2::class);
    }
    
    function it_sums_1212_as_6_as_all_four_digits_match_the_two_items_ahead()
    {
        $this->parseSum(1212)->shouldBe(6);
    }

    function it_parses_1313_as_8()
    {
        $this->parseSum(1313)->shouldBe(8);
    }

    function it_parses_1221_as_0()
    {
        $this->parseSum(1221)->shouldBe(0);
    }

    function it_parses_123425_as_4()
    {
        $this->parseSum(123425)->shouldBe(4);
    }

    function it_parses_12131415_as_4()
    {
        $this->parseSum(12131415)->shouldBe(4);
    }

    function it_parses_123123_as_12()
    {
        $this->parseSum(123123)->shouldBe(12);
    }
}
