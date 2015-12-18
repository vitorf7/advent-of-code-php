<?php

namespace spec\VFDev\AdventOfCode\Day4;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdventCoinValidatorSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('00000');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('VFDev\AdventOfCode\Day4\AdventCoinValidator');
    }

    public function it_should_return_false_if_a_string_does_not_begin_with_five_zeros()
    {
        $string = '11111' . uniqid('some_random_string');

        $this->isValid($string)->shouldBe(false);
    }

    public function it_should_return_true_if_a_string_begins_with_five_zeros()
    {
        $string = '00000' . uniqid('some_random_string');

        $this->isValid($string)->shouldBe(true);
    }
}
