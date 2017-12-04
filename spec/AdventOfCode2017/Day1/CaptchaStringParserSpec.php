<?php

namespace spec\VFDev\AdventOfCode2017\Day1;

use VFDev\AdventOfCode2017\Day1\CaptchaStringParser;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CaptchaStringParserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CaptchaStringParser::class);
    }

    function it_sums_when_first_digit_matches_second_and_third_digit_matches_fourth()
    {
        $this->parseSum(1122)->shouldBe(3);
    }

    function it_sums_2233_as_5()
    {
        $this->parseSum(2233)->shouldBe(5);
    }

    function it_sums_1234_as_0()
    {
        $this->parseSum(1234)->shouldBe(0);
    }

    function it_sums_91212129_as_9_because_first_and_last_numbers_match()
    {
        $this->parseSum(91212129)->shouldBe(9);
    }

    function it_sums_1111_as_4_since_all_of_the_numbers_are_the_same()
    {
        $this->parseSum(1111)->shouldBe(4);
    }
}
