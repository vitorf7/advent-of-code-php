<?php

namespace spec\VFDev\AdventOfCode\Day3;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use VFDev\AdventOfCode\Day3\Santa;

class ElfGuideSpec extends ObjectBehavior
{
    public function let(Santa $santa)
    {
        $this->beConstructedWith($santa);   
    }

    // function it_is_initializable()
    // {
    //     $this->shouldHaveType('VFDev\AdventOfCode\Day3\ElfGuide');
    // }

    // public function it_should_be_able_to_tell_santa_to_move_north_with_a_carret_symbol(Santa $santa)
    // {
    //     $santa->moveNorth()->shouldBeCalled();

    //     $this->readDirections('^');
    // }

    // public function it_should_tell_santa_to_move_south_with_a_v_symbol(Santa $santa)
    // {
    //     $santa->moveSouth()->shouldBeCalled();

    //     $this->readDirections('v');
    // }

    // public function it_should_be_able_to_tell_santa_to_move_west_with_a_minus_than_symbol(Santa $santa)
    // {
    //     $santa->moveWest()->shouldBeCalled();

    //     $this->readDirections('<');
    // }

    // public function it_should_be_able_to_tell_santa_to_move_east_with_a_greater_than_symbol(Santa $santa)
    // {
    //     $santa->moveEast()->shouldBeCalled();

    //     $this->readDirections('>');
    // }

    // public function it_should_be_able_to_tell_santa_to_move_multiple_times_with_more_than_one_direction(Santa $santa)
    // {
    //     $this->readDirections('^v');

    //     $santa->moveNorth()->shouldBeCalledTimes(1);
    //     $santa->moveSouth()->shouldBeCalledTimes(1);
    // }

    // public function it_should_be_able_to_tell_santa_to_move_in_all_directions_when_give_the_directions_to_do_so(Santa $santa)
    // {
    //     $this->readDirections('^>v<');

    //     $santa->moveNorth()->shouldBeCalledTimes(1);
    //     $santa->moveEast()->shouldBeCalledTimes(1);
    //     $santa->moveSouth()->shouldBeCalledTimes(1);
    //     $santa->moveWest()->shouldBeCalledTimes(1);
    // }

    // public function it_throws_an_exception_error_when_a_direction_is_not_found()
    // {
    //     $this->shouldThrow('\Exception')->during('readDirections', array('}'));
    // }

    public function it_should_be_able_to_have_many_santas_passed_in(Santa $santa1, Santa $santa2)
    {
        $this->beConstructedWith([$santa1, $santa2]);
    }
}
