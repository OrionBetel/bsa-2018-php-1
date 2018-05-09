<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    public function generate(): \Generator
    {
        function emoji_gen()
        {
            $emojis = ['🚀', '🚃', '🚄', '🚅', '🚇'];
            
            for ($i = 0; $i < 5; $i++) {
                yield $emojis[$i];
            }
        }

        return emoji_gen();
    }
}