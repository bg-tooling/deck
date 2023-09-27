<?php

declare(strict_types=1);

namespace Tests\Unit\Shufflers;

use Codeception\Test\Unit;
use Tests\Example\StandartDeckBuilder;
use Tgt\Deck\Shufflers\ByStacksShuffler;

final class ByStacksShufflerTest extends Unit
{
    public function testEvenShuffle(): void
    {
        $countStacks = 4;
        $countCardsInDeck = 36;
        $countCardsInStacks = $countCardsInDeck / $countStacks;

        $shuffler = new ByStacksShuffler($countStacks);
        $cardsBeforeShuffling = StandartDeckBuilder::build(minCardValue: 6); // 36 cards deck

        $cardsAfterShuffling = $shuffler($cardsBeforeShuffling);

        verify(array_is_list($cardsAfterShuffling))->true();
        verify(count($cardsBeforeShuffling))->equals(count($cardsAfterShuffling));
        verify($cardsBeforeShuffling)->notEquals($cardsAfterShuffling);

        // Check new cards position if shuffled by stacks (order is known)
        verify($cardsBeforeShuffling[0])->equals($cardsAfterShuffling[1 * $countCardsInStacks - 1]);
        verify($cardsBeforeShuffling[1])->equals($cardsAfterShuffling[2 * $countCardsInStacks - 1]);
        verify($cardsBeforeShuffling[2])->equals($cardsAfterShuffling[3 * $countCardsInStacks - 1]);
        verify($cardsBeforeShuffling[3])->equals($cardsAfterShuffling[4 * $countCardsInStacks - 1]);
    }

    public function testOddShuffle(): void
    {
        $countStacks = 5;
        $countCardsInFirstStacks = 8;
        $countCardsInNextStacks = 7;

        $shuffler = new ByStacksShuffler($countStacks);
        $cardsBeforeShuffling = StandartDeckBuilder::build(minCardValue: 6); // 36 cards deck

        $cardsAfterShuffling = $shuffler($cardsBeforeShuffling);

        verify(array_is_list($cardsAfterShuffling))->true();
        verify(count($cardsBeforeShuffling))->equals(count($cardsAfterShuffling));
        verify($cardsBeforeShuffling)->notEquals($cardsAfterShuffling);

        // Check new cards position if shuffled by stacks (order is known)
        verify($cardsBeforeShuffling[0])->equals($cardsAfterShuffling[1 * $countCardsInFirstStacks - 1]);
        verify($cardsBeforeShuffling[1])->equals($cardsAfterShuffling[2 * $countCardsInNextStacks]);
        verify($cardsBeforeShuffling[2])->equals($cardsAfterShuffling[3 * $countCardsInNextStacks]);
        verify($cardsBeforeShuffling[3])->equals($cardsAfterShuffling[4 * $countCardsInNextStacks]);
    }
}
