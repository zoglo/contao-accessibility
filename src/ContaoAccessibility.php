<?php

declare(strict_types=1);

namespace Zoglo\ContaoAccessibility;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoAccessibility extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
