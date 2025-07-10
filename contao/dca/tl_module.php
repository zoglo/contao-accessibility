<?php

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_module']['fields']['ariaLabel'] = [
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
    ->addLegend('label_legend', 'title_legend')
    ->addField('ariaLabel', 'label_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('navigation', 'tl_module')
;
