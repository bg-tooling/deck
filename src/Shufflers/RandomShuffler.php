<?php

declare(strict_types=1);

namespace Tgt\Deck\Shufflers;

use Random\Randomizer;

/** @template TCard */
final class RandomShuffler
{
    public function __construct(
        private readonly Randomizer $randomizer = new Randomizer()
    ) {
    }

    /**
     * @param list<TCard> $cards
     * @return list<TCard>
     */
    public function __invoke(array $cards): array
    {
        return $this->randomizer->shuffleArray($cards);
    }
}
