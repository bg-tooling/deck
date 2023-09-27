<?php

declare(strict_types=1);

namespace Tgt\Deck;

/** @template TCard */
interface InsertableDeck
{
    /**
     * Inserting a cards into the deck at a given position.
     *
     * @param list<TCard> $cards
     * @param int<0, max> $position
     */
    public function insert(array $cards, int $position): void;
}
