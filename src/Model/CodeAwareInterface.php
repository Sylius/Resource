<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Resource\Model;

interface CodeAwareInterface
{
    public function getCode(): ?string;

    public function setCode(?string $code): void;
}

class_alias(CodeAwareInterface::class, \Sylius\Component\Resource\Model\CodeAwareInterface::class);
