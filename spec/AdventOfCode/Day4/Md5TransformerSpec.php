<?php

namespace spec\VFDev\AdventOfCode\Day4;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Md5TransformerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('VFDev\AdventOfCode\Day4\Md5Transformer');
    }

    public function it_should_be_able_to_md5_hash_a_string()
    {
        $this->transform('hello')->shouldBe('5d41402abc4b2a76b9719d911017c592');
        $this->transform('Hello')->shouldBe('8b1a9953c4611296a827abf8c47804d7');
    }
}
