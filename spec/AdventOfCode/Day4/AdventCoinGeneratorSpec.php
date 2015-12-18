<?php

namespace spec\VFDev\AdventOfCode\Day4;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdventCoinGeneratorSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('abcdef');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('VFDev\AdventOfCode\Day4\AdventCoinGenerator');
    }

    public function it_will_generate_new_coins_continuously()
    {
        $counter = 1;
        foreach ($this->generateCoin() as $key) {

            $key->shouldBe('abcdef' . $counter);

            if ($counter === 2) {
                break;
            }
            $counter++;
        }
    }
}
