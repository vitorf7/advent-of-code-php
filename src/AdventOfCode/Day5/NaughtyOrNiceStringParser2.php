<?php

namespace VFDev\AdventOfCode\Day5;


class NaughtyOrNiceStringParser2 implements NaughtyNiceStringParserInterface
{
    /**
     * @var int
     */
    protected $niceStrings = 0;

    /**
     * @var int
     */
    protected $naughtyStrings = 0;

    public function parse($string)
    {
        $stringsArray = explode(PHP_EOL, $string);

        foreach ($stringsArray as $string) {
            $this->isNicestring($string) ? $this->niceStrings += 1 : $this->naughtyStrings += 1;
        }
    }

    public function niceStrings()
    {
        return $this->niceStrings;
    }

    public function naughtyStrings()
    {
        return $this->naughtyStrings;
    }

    private function isNicestring($string)
    {
        return $this->hasNonOverlappingRepeatedStrings($string) && $this->hasRepeatingLetterWithOneLetterBetween($string);
    }

    private function hasNonOverlappingRepeatedStrings($string)
    {
        return !! preg_match('/([a-z]{2,3}).*\1/', $string);
    }

    private function hasRepeatingLetterWithOneLetterBetween($string)
    {
        return !! preg_match('/([a-z])((?!\1).)\1/', $string);
    }

}