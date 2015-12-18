<?php

namespace VFDev\AdventOfCode\Day4;

class Puzzle2
{
    public function __invoke()
    {
        $key = 'ckczppom';
        $adventCoinGenerator = new AdventCoinGenerator($key);
        $md5Transformer = new Md5Transformer();
        $stringValidator = new AdventCoinValidator('000000');

        foreach ($adventCoinGenerator->generateCoin() as $adventCoin) {
            $md5Coin = $md5Transformer->transform($adventCoin);

            if ($stringValidator->isValid($md5Coin)) {
                $validCoin = $adventCoin;
                break;
            }
        }

        echo "The valid coin found is: " . $validCoin . "\n\n"  ;
    }
}
