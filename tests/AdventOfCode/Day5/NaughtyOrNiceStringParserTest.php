<?php

namespace Tests\AdventOfCode\Day5;


use VFDev\AdventOfCode\Day5\NaughtyOrNiceStringParser;


class NaughtyOrNiceStringParserTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_parses_aaa_as_nice_string()
    {
        // Arrange
        $parser = new NaughtyOrNiceStringParser();

        // Act
        $parser->parse('aaa');
        $result = $parser->niceStrings();

        // Assert
        $this->assertEquals(1, $result);
    }

    /** @test */
    public function it_parses_aaa_and_eee_as_nice_strings()
    {
        // Arrange
        $parser = new NaughtyOrNiceStringParser();

        // Act
        $string = <<<EOT
aaa
eee
EOT;

        $parser->parse($string);
        $result = $parser->niceStrings();

        // Assert
        $this->assertEquals(2, $result);
    }

    /** @test */
    public function it_parses_aaa_and_eee_and_ddd_as_2_nice_strings()
    {
        // Arrange
        $parser = new NaughtyOrNiceStringParser();

        // Act
        $string = <<<EOT
aaa
eee
ddd
EOT;

        $parser->parse($string);
        $result = $parser->niceStrings();

        // Assert
        $this->assertEquals(2, $result);
    }

    /** @test */
    public function it_parses_with_3_vowels_and_2_repeated_characters_as_nice()
    {
        // Arrange
        $parser = new NaughtyOrNiceStringParser();

        // Act
        $string = <<<EOT
aaa
eee
ddd
ugknbfddgicrmopn
EOT;

        $parser->parse($string);
        $result = $parser->niceStrings();

        // Assert
        $this->assertEquals(3, $result);
    }

    /** @test */
    public function it_parses_with_disallowed_characters_as_not_nice()
    {
        // Arrange
        $parser = new NaughtyOrNiceStringParser();

        // Act
        $string = <<<EOT
aaa
eee
ddd
ugknbfddgicrmopn
haeabgwjzuvabuyypxyu
EOT;

        $parser->parse($string);
        $result = $parser->niceStrings();

        // Assert
        $this->assertEquals(3, $result);
    }

    /** @test */
    public function it_parses_with_disallowed_characters_as_naughty()
    {
        // Arrange
        $parser = new NaughtyOrNiceStringParser();

        // Act
        $string = <<<EOT
haeabgwjzuvabuyypxyu
EOT;

        $parser->parse($string);
        $result = $parser->naughtyStrings();

        // Assert
        $this->assertEquals(1, $result);
    }
}
