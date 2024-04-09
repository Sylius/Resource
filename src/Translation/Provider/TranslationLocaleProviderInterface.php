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

namespace Sylius\Resource\Translation\Provider;

interface TranslationLocaleProviderInterface
{
    /** @return string[] */
    public function getDefinedLocalesCodes(): array;

    public function getDefaultLocaleCode(): string;
}

class_alias(TranslationLocaleProviderInterface::class, \Sylius\Component\Resource\Translation\Provider\TranslationLocaleProviderInterface::class);