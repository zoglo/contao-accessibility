<?php

declare(strict_types=1);

use Contao\System;

$GLOBALS['TL_DCA']['tl_files']['fields']['textTrackLanguage'] = [
    'filter' => true,
    'inputType' => 'select',
    'eval' => [
        'mandatory' => true,
        'includeBlankOption' => true,
        'chosen' => true,
        'tl_class' => 'w50 clr',
    ],
    'options_callback' => static fn () => System::getContainer()->get('contao.intl.locales')->getLocales(),
    'sql' => [
        'type' => 'string',
        'length' => 64,
        'default' => '',
    ],
];

$GLOBALS['TL_DCA']['tl_files']['fields']['textTrackType'] = [
    'inputType' => 'select',
    'reference' => &$GLOBALS['TL_LANG']['tl_files'],
    'eval' => [
        'includeBlankOption' => true,
        'tl_class' => 'w50',
    ],
    'options' => [
        'captions' => 'captions',
        'descriptions' => 'descriptions',
        'subtitles' => 'subtitles',
        'chapters' => 'chapters',
        'metadata' => 'metadata',
    ],
    'sql' => [
        'type' => 'string',
        'length' => 12,
        'notnull' => false,
    ],
];
