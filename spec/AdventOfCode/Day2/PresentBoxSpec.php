<?php

namespace spec\VFDev\AdventOfCode\Day2;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PresentBoxSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('2x3x4');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('VFDev\AdventOfCode\Day2\PresentBox');
    }

    public function it_should_have_a_length()
    {
        $this->getLength()->shouldBe(2);
    }

    public function it_should_have_a_width()
    {
        $this->getWidth()->shouldBe(3);
    }

    public function it_should_have_a_height()
    {
        $this->getHeight()->shouldBe(4);
    }

    public function it_should_calculate_the_wrapping_paper_area_for_normal_box()
    {
        $this->getWrappingPaperArea()->shouldBe(58);
    }

    public function it_should_calculate_the_wrapping_paper_area_for_smaller_box()
    {
        $this->beConstructedWith('1x1x10');

        $this->getWrappingPaperArea()->shouldBe(43);
    }

    public function it_should_calculate_ribbon_paper_area()
    {
        $this->getRibbonPaperArea()->shouldBe(34);
    }

    public function it_should_calculate_ribbon_paper_area_of_small_box()
    {
        $this->beConstructedWith('1x1x10');

        $this->getRibbonPaperArea()->shouldBe(14);
    }

}
