<?php

declare(strict_types=1);

use Contao\Rector\Set\ContaoLevelSetList;
use Contao\Rector\Set\ContaoSetList;
use Rector\CodeQuality\Rector\If_\SimplifyIfElseToTernaryRector;
use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true,
        instanceOf: true,
        earlyReturn: true,
        strictBooleans: true,
    )
    ->withPhpSets(
        php82: true,
    )
    ->withAttributesSets(
        symfony: true,
    )
    ->withSets([
        ContaoLevelSetList::UP_TO_CONTAO_53,
        ContaoSetList::ANNOTATIONS_TO_ATTRIBUTES
    ])
    ->withPaths([
        __DIR__ . '/contao',
        __DIR__ . '/src',
    ])
    ->withImportNames(removeUnusedImports: true)
    ->withSkip([
        SimplifyIfElseToTernaryRector::class,
    ])
    ->withParallel()
;
