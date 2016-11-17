<?php

namespace VFDev\AdventOfCode\Day5;

/**
 * Class NaughtyOrNiceStringParser
 *
 * @package VFDev\AdventOfCode\Day5
 */
class NaughtyOrNiceStringParser implements NaughtyNiceStringParserInterface
{
    /**
     * @var int
     */
    protected $niceStrings = 0;

    /**
     * @var int
     */
    protected $naughtyStrings = 0;

    /**
     * @param $string
     */
    public function parse($string)
    {
        $stringsArray = explode(PHP_EOL, $string);

        foreach ($stringsArray as $string) {
            $this->isNicestring($string) ? $this->niceStrings += 1 : $this->naughtyStrings += 1;
        }
    }

    /**
     * @return int
     */
    public function niceStrings()
    {
        return $this->niceStrings;
    }

    /**
     * @return int
     */
    public function naughtyStrings()
    {
        return $this->naughtyStrings;
    }

    /**
     * @param $string
     *
     * @return bool
     */
    private function isNicestring($string)
    {
        return $this->hasAtLeast3Vowels($string) && $this->hasAtLeast2RepeatedCharacters($string) && $this->doesNotContainDisallowedStrings($string);
    }

    /**
     * @param $string
     *
     * @return bool
     */
    private function hasAtLeast3Vowels($string)
    {
        preg_match_all('/[aeiou]/', $string, $matches);

        return count($matches[0]) >= 3;
    }

    /**
     * @param $string
     *
     * @return bool
     */
    private function hasAtLeast2RepeatedCharacters($string)
    {
        return !! preg_match('/(\w)\1/', $string);
    }

    /**
     * @param $string
     *
     * @return bool
     */
    private function doesNotContainDisallowedStrings($string)
    {
        preg_match_all('/(ab|cd|pq|xy)/', $string, $matches);

        return count($matches[0]) == 0;
    }
}