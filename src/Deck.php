<?php

declare(strict_types=1);

namespace Tgt\Deck;

use Countable;
use Tgt\Deck\Exceptions\NotEnoughCards;

/** @template TCard */
interface Deck extends Countable
{
    /**
     * Count cards in the deck.
     *
     * @return int<0, max>
     */
    public function count(): int;

    /**
     * Picks a cards from the deck.
     *
     * @param int<1, max> $count
     * @return list<TCard>
     * @throws NotEnoughCards If $count greater than total count of cards in deck.
     */
    public function pick(int $count = 1, DeckSide $side = DeckSide::Top): array;

    /**
     * Placing a cards into the deck.
     *
     * @param list<TCard> $cards
     */
    public function place(array $cards, DeckSide $side = DeckSide::Top): void;
}
