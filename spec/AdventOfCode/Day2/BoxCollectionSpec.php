<?php

namespace spec\VFDev\AdventOfCode\Day2;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use VFDev\AdventOfCode\Day2\PresentBox;

class BoxCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('VFDev\AdventOfCode\Day2\BoxCollection');
    }

    public function it_should_start_with_empty_box_collection()
    {
        $this->getBoxes()->shouldBe([]);
    }

    public function it_should_be_able_to_hold_a_box(PresentBox $box)
    {
        $this->addBox($box);

        $boxes = $this->getBoxes();
        $boxes[0]->shouldBe($box);
    }

    public function it_should_be_able_to_give_count_of_boxes_in_collection(PresentBox $box)
    {
        $this->addBox($box);
        $boxes = $this->getBoxes();
        
        $this->shouldHaveCount(1);
        $this->count()->shouldBe(1);
    }

    public function it_should_be_able_to_get_total_wrapping_paper(PresentBox $box1, PresentBox $box2)
    {
        $box1Area = 58;
        $box2Area = 43;

        $box1->getWrappingPaperArea()->willReturn($box1Area);
        $box2->getWrappingPaperArea()->willReturn($box2Area);

        $this->addBox($box1);
        $this->addBox($box2);

        $this->getTotalWrappingPaperArea()->shouldBe($box1Area + $box2Area);
    }

    public function it_should_give_zero_if_no_box_exists_and_we_try_to_get_total_wrapping_paper_area()
    {
        $this->getTotalWrappingPaperArea()->shouldBe(0);
    }

    public function it_should_give_zero_if_no_box_exists_and_we_try_to_get_total_ribbon_paper_area()
    {
        $this->getTotalRibbonPaperArea()->shouldBe(0);
    }

    public function it_should_be_able_to_calculate_total_ribbon_paper_area(PresentBox $ribbonBox1, PresentBox $ribbonBox2)
    {
        $ribbonBox1Area = 34;
        $ribbonBox2Area = 14;

        $ribbonBox1->getRibbonPaperArea()->willReturn($ribbonBox1Area);
        $ribbonBox2->getRibbonPaperArea()->willReturn($ribbonBox2Area);

        $this->addBox($ribbonBox1);
        $this->addBox($ribbonBox2);

        $this->getTotalRibbonPaperArea()->shouldBe($ribbonBox1Area + $ribbonBox2Area);
    }


}
