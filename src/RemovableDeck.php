<?php

declare(strict_types=1);

namespace Tgt\Deck;

/**
 * @template TCard
 * @extends LookableDeck<TCard>
 */
interface RemovableDeck extends LookableDeck
{
    /**
     * @param TCard $card
     * @param TCard ...$cards
     */
    public function remove(mixed $card, mixed ...$cards): void;
}
