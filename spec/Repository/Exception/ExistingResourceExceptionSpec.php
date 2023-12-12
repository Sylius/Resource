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

namespace spec\Sylius\Resource\Doctrine\Persistence\Exception;

use PhpSpec\ObjectBehavior;
use Sylius\Resource\Doctrine\Persistence\Exception\ExistingResourceException as NewExistingResourceException;

final class ExistingResourceExceptionSpec extends ObjectBehavior
{
    function it_extends_exception(): void
    {
        $this->shouldHaveType(\Exception::class);
    }

    function it_should_be_an_alias_of_existing_resource_exception(): void
    {
        $this->shouldHaveType(NewExistingResourceException::class);
    }
}
