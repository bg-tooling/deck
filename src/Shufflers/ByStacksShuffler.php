<?php

declare(strict_types=1);

namespace Tgt\Deck\Shufflers;

/** @template TCard */
final class ByStacksShuffler
{
    public function __construct(
        private int $countStacks = 4
    ) {
    }

    /**
     * @param list<TCard> $cards
     * @return list<TCard>
     */
    public function __invoke(array $cards): array
    {
        /** @var list<list<TCard>> $stacks */
        $stacks = array_fill(1, $this->countStacks, []);
        foreach ($cards as $idx => $card) {
            for ($i = 1; $i <= $this->countStacks; $i++) {
                if (($idx % $i) === 0) {
                    $stackNum = $i;
                }
            }

            $stacks[$stackNum][] = $card;
            unset($cards[$idx]);
        }

        $result = [];
        foreach ($stacks as $stack) {
            $result = array_merge($result, $stack);
        }

        return $result;
    }
}
