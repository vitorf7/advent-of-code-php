<?php

namespace VFDev\AdventOfCode\Day2;

use VFDev\AdventOfCode\Day2\PresentBox;

class BoxCollection implements \Countable
{
    protected $boxes = [];

    protected $totalWrappingPaperArea = 0;

    protected $totalRibbonPaperArea = 0;

    public function addBox(PresentBox $box)
    {
        $this->boxes[] = $box;
    }

    public function getBoxes()
    {
        return $this->boxes;
    }

    public function count()
    {
        return count($this->boxes);
    }

    public function getTotalWrappingPaperArea()
    {
        $this->calculateTotalWrappingArea();

        return $this->totalWrappingPaperArea;
    }

    protected function calculateTotalWrappingArea()
    {
        foreach ($this->boxes as $box) {
            $this->totalWrappingPaperArea += $box->getWrappingPaperArea();
        }
    }

    public function getTotalRibbonPaperArea()
    {
        $this->calculateTotalRibbonArea();

        return $this->totalRibbonPaperArea;
    }

    protected function calculateTotalRibbonArea()
    {
        foreach ($this->boxes as $box) {
            $this->totalRibbonPaperArea += $box->getRibbonPaperArea();
        }
    }
}
