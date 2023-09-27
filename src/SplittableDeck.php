<?php

declare(strict_types=1);

namespace Tgt\Deck;

/** @template TCard */
interface SplittableDeck
{
    /**
     * Split the deck into $parts count new decks.
     * The decks should be divided equally much as possible.
     * If the count of new decks exceeds total count of cards in the deck, then empty decks will be returned.
     *
     * @param int<2, max> $parts
     * @return list<Deck<TCard>>
     */
    public function split(int $parts): array;
}
