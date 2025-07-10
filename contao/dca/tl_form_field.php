<?php

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;

$GLOBALS['TL_DCA']['tl_form_field']['fields']['autocomplete'] = [
    'search' => true,
    'inputType' => 'text',
    'eval' => [
        'helpwizard' => true,
        'maxlength' => 255,
        'tl_class' => 'w25',
    ],
    'explanation' => 'autocomplete',
    'sql' => [
        'type' => 'string',
        'default' => '',
    ],
];

PaletteManipulator::create()
    ->addField('autocomplete', 'accesskey', PaletteManipulator::POSITION_BEFORE)
    ->applyToPalette('text', 'tl_form_field')
    ->applyToPalette('textdigit', 'tl_form_field')
    ->applyToPalette('textcustom', 'tl_form_field')
    ->applyToPalette('password', 'tl_form_field')
    ->applyToPalette('passwordcustom', 'tl_form_field')
    ->applyToPalette('textarea', 'tl_form_field')
    ->applyToPalette('textareacustom', 'tl_form_field')
;
