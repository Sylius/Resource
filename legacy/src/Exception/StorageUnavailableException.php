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

namespace Sylius\Component\Resource\Exception;

class StorageUnavailableException extends \RuntimeException
{
    public function __construct(string $message = '', \Exception $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
