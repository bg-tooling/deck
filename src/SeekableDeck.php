<?php

declare(strict_types=1);

namespace Tgt\Deck;

/**
 * @template TCard
 * @extends LookableDeck<TCard>
 */
interface SeekableDeck extends LookableDeck
{
    /**
     * @param TCard $card
     * @return TCard
     */
    public function remove(mixed $card): mixed;
}
