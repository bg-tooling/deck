<?php

declare(strict_types=1);

namespace Tgt\Deck;

/**
 * @template TCard
 * @extends Deck<TCard>
 */
interface ShuffleableDeck extends Deck
{
    /**
     * Shuffle the deck.
     *
     * @param null|callable(list<TCard>): list<TCard> $shuffler
     */
    public function shuffle(?callable $shuffler = null): void;
}
