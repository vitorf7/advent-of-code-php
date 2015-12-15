<?php

namespace VFDev\AdventOfCode\Day2;

class PresentBox
{
    protected $length;
    protected $width;
    protected $height;

    public function __construct($boxDimensions)
    {
        $dimensionsArray = explode("x", strtolower(trim($boxDimensions)));

        // var_dump($dimensionsArray);

        $this->length = (int) $dimensionsArray[0];
        $this->width  = (int) $dimensionsArray[1];
        $this->height = (int) $dimensionsArray[2];
    }

    /**
     * Gets the value of length.
     *
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Gets the value of width.
     *
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Gets the value of height.
     *
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    public function getWrappingPaperArea()
    {
        $areasArray = [
            'top'   => $this->getTopArea(),
            'side'  => $this->getSideArea(),
            'front' => $this->getFrontArea()
        ];

        return 2 * array_sum($areasArray) + min($areasArray);
    }

    public function getRibbonPaperArea()
    {
        $perimetersArray = [
            'top'   => $this->getTopPerimeter(),
            'side'  => $this->getSidePerimeter(),
            'front' => $this->getFrontPerimeter()
        ];

        return min($perimetersArray) + $this->getVolume();
    }

    protected function getTopArea()
    {
        return $this->length * $this->width;
    }

    protected function getSideArea()
    {
        return $this->width * $this->height;
    }

    protected function getFrontArea()
    {
        return $this->height * $this->length;
    }

    protected function getTopPerimeter()
    {
        return 2 * ($this->length + $this->width);
    }

    protected function getSidePerimeter()
    {
        return 2 * ($this->width + $this->height);
    }

    protected function getFrontPerimeter()
    {
        return 2 * ($this->height + $this->length);
    }

    protected function getVolume()
    {
        return $this->length * $this->width * $this->height;
    }

    
}
