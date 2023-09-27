<?php

declare(strict_types=1);

namespace Tests\Unit\Shufflers;

use Codeception\Test\Unit;
use Tests\Example\StandartDeckBuilder;
use Tgt\Deck\Shufflers\RandomShuffler;

final class RandomShufflerTest extends Unit
{
    public function testShuffle(): void
    {
        $shuffler = new RandomShuffler();
        $cardsBeforeShuffling = StandartDeckBuilder::build(minCardValue: 6); // 36 cards deck

        $cardsAfterShuffling = $shuffler($cardsBeforeShuffling);

        verify(array_is_list($cardsAfterShuffling))->true();
        verify(count($cardsBeforeShuffling))->equals(count($cardsAfterShuffling));
        verify($cardsBeforeShuffling)->notEquals($cardsAfterShuffling);
    }
}
