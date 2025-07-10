<?php

declare(strict_types=1);

namespace Zoglo\ContaoAccessibility\EventListener\DataContainer;

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Contao\CoreBundle\DependencyInjection\Attribute\AsCallback;
use Contao\DataContainer;
use Symfony\Component\Filesystem\Path;

class TrackFieldsListener
{
    #[AsCallback(table: 'tl_files', target: 'config.onpalette')]
    public function addTextTrackFields(string $palette, DataContainer $dc): string
    {
        // $dc->id is the file name in this case
        if (Path::getExtension($dc->id, true) === 'vtt')
        {
            return PaletteManipulator::create()
                ->addField(['textTrackLanguage', 'textTrackType'], 'name')
                ->applyToString($palette)
            ;
        }

        return $palette;
    }
}
