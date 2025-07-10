<?php

declare(strict_types=1);

namespace Zoglo\ContaoAccessibility\Twig;

use Contao\CoreBundle\Filesystem\Dbafs\UnableToResolveUuidException;
use Contao\CoreBundle\Filesystem\FilesystemItem;
use Contao\CoreBundle\Filesystem\VirtualFilesystemInterface;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\FilesModel;
use Contao\StringUtil;
use Contao\Validator;
use Symfony\Component\Uid\Uuid;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class ContaoAccessibilityExtension extends AbstractExtension
{
    public function __construct(
        private readonly ContaoFramework $framework,
        private readonly VirtualFilesystemInterface $filesStorage,
    ) {
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('file', [$this, 'getFileItem']),
        ];
    }

    public function getFileItem(string $uuid): array|null
    {
        if (!Validator::isBinaryUuid($uuid))
        {
            return null;
        }

        $uuid = StringUtil::binToUuid($uuid);

        try
        {
            $uuidObject = Uuid::isValid($uuid) ? Uuid::fromString($uuid) : Uuid::fromBinary($uuid);

            if (!($item = $this->filesStorage->get($uuidObject)) instanceof FilesystemItem)
            {
                return null;
            }
        }
        catch (\InvalidArgumentException|UnableToResolveUuidException)
        {
            return null;
        }

        $filesModel = $this->framework->getAdapter(FilesModel::class)->findByUuid($uuid);

        if ($filesModel === null)
        {
            return null;
        }

        return [
            ...$filesModel->row(), ...[
                'item' => $item,
                'publicUri' => $this->filesStorage->generatePublicUri($uuid),
            ]];
    }
}
