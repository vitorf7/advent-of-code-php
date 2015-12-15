<?php

namespace spec\VFDev\AdventOfCode\Day3;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GridSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('VFDev\AdventOfCode\Day3\Grid');
    }

    public function it_should_start_with_no_houses_visited()
    {
        $this->getHouseVisits()->shouldBe(0);
    }

    public function it_should_be_able_to_visit_a_house()
    {
        $this->visit(0, 0);

        $this->getHouseVisits()->shouldBe(1);
    }

    public function it_should_be_able_to_visit_a_couple_of_houses()
    {
        $this->visit(0, 0);
        $this->visit(0, 1);

        $this->getHouseVisits()->shouldBe(2);
    }

    public function it_should_not_add_house_visits_to_houses_that_have_already_been_visited()
    {
        $this->visit(0, 0);
        $this->visit(0, 1);
        $this->visit(0, 0);

        $this->getHouseVisits()->shouldBe(2);
    }
}
