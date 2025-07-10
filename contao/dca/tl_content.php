<?php

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_content']['fields']['playerSize']['eval']['tl_class'] = 'w50 clr';

$GLOBALS['TL_DCA']['tl_content']['fields']['playerTitle'] = [
    'inputType' => 'text',
    'eval' => [
        'maxlength' => 255,
        'tl_class' => 'w50',
    ],
    'sql' => [
        'type' => 'string',
        'default' => '',
    ],
];

PaletteManipulator::create()
    ->addField('playerTitle', 'playerSize', PaletteManipulator::POSITION_BEFORE)
    ->applyToPalette('youtube', 'tl_content')
    ->applyToPalette('vimeo', 'tl_content')
;
