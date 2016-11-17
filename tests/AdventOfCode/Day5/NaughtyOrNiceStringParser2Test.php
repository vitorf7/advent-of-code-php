<?php

namespace Tests\AdventOfCode\Day5;


use VFDev\AdventOfCode\Day5\NaughtyOrNiceStringParser2;


class NaughtyOrNiceStringParser2Test extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_parses_repeated_2char_strings_not_overlapping_as_nice()
    {
        $parser = New NaughtyOrNiceStringParser2();
        $string = <<<EOT
qjhvhtzxzqqjkmpb
EOT;
        $parser->parse($string);
        $result = $parser->niceStrings();

        $this->assertEquals(1, $result);
    }

    /** @test */
    public function it_parses_repeated_char_with_1_char_in_between()
    {
        $parser = New NaughtyOrNiceStringParser2();
        $string = <<<EOT
qjhvhtzxzqqjkmpb
EOT;
        $parser->parse($string);
        $result = $parser->niceStrings();

        $this->assertEquals(1, $result);
    }

    /** @test */
    public function it_matches_all_the_nice_strings()
    {
        $parser = New NaughtyOrNiceStringParser2();
        $string = <<<EOT
qjhvhtzxzqqjkmpb
xxyxx
uurcxstgmygtbstg
EOT;
        $parser->parse($string);
        $nice = $parser->niceStrings();
        $naughty = $parser->naughtyStrings();

        $this->assertEquals(2, $nice);
        $this->assertEquals(1, $naughty);
    }
}
