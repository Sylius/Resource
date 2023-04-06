<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Resource\Symfony\Routing;

use Sylius\Component\Resource\Metadata\Resource;

interface ArgumentParserInterface
{
    public function parseExpression(string $expression, Resource $resource, mixed $data): mixed;
}