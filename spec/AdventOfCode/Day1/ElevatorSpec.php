<?php

namespace spec\VFDev\AdventOfCode\Day1;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ElevatorSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('VFDev\AdventOfCode\Day1\Elevator');
    }

    public function it_starts_on_ground_floor_zero()
    {
        $this->getFloorNumber()->shouldBe(0);
    }

    public function it_shoul_go_up_a_floor()
    {
        $this->goUp();
        $this->getFloorNumber()->shouldBe(1);
    }

    public function it_should_be_able_to_get_floor_number_connected_to_go_up()
    {
        $this->goUp()->getFloorNumber()->shouldBe(1);
    }

    public function it_should_go_down_a_floor()
    {
        $this->goDown();
        $this->getFloorNumber()->shouldBe(-1);
    }

    public function it_should_be_able_to_get_floor_number_connected_to_go_down_method()
    {
        $this->goDown()->getFloorNumber()->shouldBe(-1);
    }
}
