<?php

declare(strict_types=1);

namespace Tgt\Deck\Shufflers;

/** @template TCard */
final class ByStacksShuffler
{
    public function __construct(
        /** @var int<2, max> $countStacks */
        private readonly int $countStacks = 4
    ) {
    }

    /**
     * @param list<TCard> $cards
     * @return list<TCard>
     */
    public function __invoke(array $cards): array
    {
        $stacks = array_fill(0, $this->countStacks, []);

        // Place each next card on top of the stack
        while (count($cards) > 0) {
            foreach ($stacks as &$stack) {
                $nextCard = array_shift($cards);
                if ($nextCard === null) {
                    break;
                }

                array_unshift($stack, $nextCard);
            }
            unset($stack);
        }

        // And put stacks on top of each other
        $result = [];
        foreach ($stacks as $stack) {
            array_splice($result, offset: count($result), length: 0, replacement: $stack);
        }

        return $result;
    }
}
