<?php

declare(strict_types=1);

namespace Zoglo\ContaoAccessibility\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Zoglo\ContaoAccessibility\ContaoAccessibility;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoAccessibility::class)
                ->setLoadAfter([
                    ContaoCoreBundle::class,
                ])
                ->setReplace(['contao-a11y']),
        ];
    }
}
