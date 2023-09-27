<?php

declare(strict_types=1);

namespace Tgt\Deck;

use Tgt\Deck\Exceptions\NotEnoughCards;

/** @template TCard */
interface LookableDeck
{
    /**
     * Looks a cards from the deck.
     *
     * @param int<1, max> $count
     * @return list<TCard>
     * @throws NotEnoughCards If $count greater than total count of cards in deck.
     */
    public function look(int $count = 1, DeckSide $side = DeckSide::Top): array;
}
