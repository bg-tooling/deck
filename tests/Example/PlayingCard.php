<?php

declare(strict_types=1);

namespace Tests\Example;

final class PlayingCard
{
    public function __construct(
        public readonly Suit $suit,
        public readonly string|int $value,
    ) {
    }
}
