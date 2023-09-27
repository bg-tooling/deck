<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer;
use PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer;
use PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer;
use PHP_CodeSniffer\Standards\Generic\Sniffs\ControlStructures\DisallowYodaConditionsSniff;
use PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer;
use PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer;
use Symplify\CodingStandard\Fixer\ArrayNotation\ArrayListItemNewlineFixer;
use Symplify\CodingStandard\Fixer\ArrayNotation\ArrayOpenerAndCloserNewlineFixer;
use Symplify\CodingStandard\Fixer\ArrayNotation\StandaloneLineInMultilineArrayFixer;

return function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        '../src',
        '../tests',
    ]);

    $ecsConfig->sets([
        SetList::PSR_12,
        SetList::COMMENTS,
        SetList::DOCBLOCK,
        SetList::CLEAN_CODE,
        SetList::SPACES,
        SetList::NAMESPACES,
        SetList::ARRAY,
        SetList::STRICT,
    ]);

    $ecsConfig->ruleWithConfiguration(TrailingCommaInMultilineFixer::class, ['elements' => [TrailingCommaInMultilineFixer::ELEMENTS_ARRAYS]]);
    $ecsConfig->ruleWithConfiguration(ArraySyntaxFixer::class, ['syntax' => 'short']);

    // this way you add a single rule
    $ecsConfig->rules([
        NoUnusedImportsFixer::class,
        NoWhitespaceBeforeCommaInArrayFixer::class,
        ArrayOpenerAndCloserNewlineFixer::class,
        ArrayIndentationFixer::class,
        TrimArraySpacesFixer::class,
        WhitespaceAfterCommaInArrayFixer::class,
        ArrayListItemNewlineFixer::class,
        StandaloneLineInMultilineArrayFixer::class,
        DisallowYodaConditionsSniff::class,
    ]);

    $ecsConfig->lineEnding("\n");
};
