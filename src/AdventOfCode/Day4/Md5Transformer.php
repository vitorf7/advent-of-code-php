<?php

namespace VFDev\AdventOfCode\Day4;

class Md5Transformer
{
    public function transform($string)
    {
        return md5($string);
    }
}
