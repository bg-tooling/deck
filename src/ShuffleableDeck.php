<?php

declare(strict_types=1);

namespace Tgt\Deck;

use Tgt\Deck\Shufflers\Shuffler;

/** @template TCard */
interface ShuffleableDeck
{
    /**
     * Shuffle the deck.
     *
     * @param null|callable(list<TCard>): list<TCard> $shuffler
     * @return void
     */
    public function shuffle(?Shuffler $shuffler = null): void;
}
