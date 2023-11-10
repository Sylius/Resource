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

namespace spec\Sylius\Component\Resource\Factory;

use PhpSpec\ObjectBehavior;
use Sylius\Resource\Factory\Factory as NewFactory;
use Sylius\Resource\Factory\FactoryInterface;
use Sylius\Component\Resource\Factory\FactoryInterface as LegacyFactoryInterface;

final class FactorySpec extends ObjectBehavior
{
    function let(): void
    {
        $this->beConstructedWith(\stdClass::class);
    }

    function it_implements_factory_interface(): void
    {
        $this->shouldHaveType(FactoryInterface::class);
    }

    function it_implements_legacy_factory_interface(): void
    {
        $this->shouldHaveType(LegacyFactoryInterface::class);
    }

    function it_is_an_alias_of_the_factory(): void
    {
        $this->shouldBeAnInstanceOf(NewFactory::class);
    }

    function it_creates_a_new_instance_of_a_resource(): void
    {
        $this->createNew()->shouldHaveType(\stdClass::class);
    }
}
