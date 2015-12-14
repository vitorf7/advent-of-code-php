<?php

namespace spec\VFDev\AdventOfCode\Day1;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use VFDev\AdventOfCode\Day1\Elevator;

class ElevatorIntructorParenthesisSpec extends ObjectBehavior
{
    public function let(Elevator $elevator)
    {
        $this->beConstructedWith($elevator);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('VFDev\AdventOfCode\Day1\ElevatorIntructorParenthesis');
    }

    public function it_should_implement_ElevatorInstructorInterface()
    {
        $this->shouldImplement('VFDev\AdventOfCode\Day1\ElevatorInstructorInterface');
    }

    public function it_should_go_up_when_it_parses_an_open_parenthesis($elevator)
    {
        $this->parseInstructions('(');
        $elevator->goUp()->shouldBeCalled();
    }

    public function it_should_go_down_when_it_parses_a_close_parenthesis($elevator)
    {
        $this->parseInstructions(')');
        $elevator->goDown()->shouldBeCalled();
    }

    public function it_should_go_up_multiple_times_when_multiple_open_parenthesis_are_parsed($elevator)
    {
        $this->parseInstructions('((');
        $elevator->goUp()->shouldBeCalledTimes(2);
    }

    public function it_should_go_down_multiple_times_when_multiple_close_parenthesis_are_parsed($elevator)
    {
        $this->parseInstructions('))');
        $elevator->goDown()->shouldBeCalledTimes(2);
    }

    public function it_should_be_able_to_parse_multiple_instructions_in_string($elevator)
    {
        $this->parseInstructions('(())');
        $elevator->goUp()->shouldBeCalledTimes(2);
        $elevator->goDown()->shouldBeCalledTimes(2);
    }

    public function it_should_be_able_to_parse_multiple_instructions_in_array($elevator)
    {
        $this->parseInstructions(array('(', '(', ')', ')'));
        $elevator->goUp()->shouldBeCalledTimes(2);
        $elevator->goDown()->shouldBeCalledTimes(2);
    }

    public function it_throw_an_eception_when_an_instruction_is_not_recognised()
    {
        $this->shouldThrow('\Exception')->during('parseInstructions', array('}'));
    }

    public function it_starts_with_instruction_number_at_zero()
    {
        $this->getInstructionsCount()->shouldBe(0);
    }

    public function it_should_have_1_instructions_count_when_it_receives_one_instruction()
    {
        $this->parseInstructions('(');
        $this->getInstructionsCount()->shouldBe(1);
    }

    public function it_should_have_2_instrcuctions_when_it_receives_two_instructions()
    {
        $this->parseInstructions('()');
        $this->getInstructionsCount()->shouldBe(2);
    }

    // public function it_should_tell_which_instruction_number_when_it_first_entered_the_basement_floor(Elevator $elevator)
    // {
    //     $this->parseInstructions('())');
    //     $this->getInstructionsCount()->shouldBe(3);

    //     $elevator->goUp()->shouldBeCalledTimes(1);
    //     $elevator->goDown()->shouldBeCalledTimes(2);

    //     $elevator->getFloorNumber()->willReturn(-1);
    //     $this->getFirstBasementEntryInstruction()->shouldReturn(3);
    // }
}
