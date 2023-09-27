<?php

declare(strict_types=1);

namespace Tests\Example;

final class StandartDeckBuilder
{
    /**
     * @param int<2, 10> $minCardValue
     * @return list<PlayingCard>
     */
    public static function build(int $minCardValue): array
    {
        $result = [];
        foreach (Suit::cases() as $suit) {
            for ($i = $minCardValue; $i <= 14; $i++) {
                $cardValue = match ($i) {
                    11 => 'Jack',
                    12 => 'Queen',
                    13 => 'King',
                    14 => 'Ace',
                    default => $i
                };

                $result[] = new PlayingCard($suit, $cardValue);
            }
        }

        return $result;
    }
}
