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

namespace Sylius\Component\Resource\Metadata\Api;

use Sylius\Component\Resource\Metadata\HttpOperation;
use Sylius\Component\Resource\Metadata\UpdateOperationInterface;

/**
 * @experimental
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
final class Put extends HttpOperation implements UpdateOperationInterface
{
    public function __construct(
        ?string $path = null,
        ?string $routePrefix = null,
        ?string $template = null,
        ?string $shortName = null,
        ?string $name = null,
        string|callable|null $provider = null,
        string|callable|null $processor = null,
        string|callable|null $responder = null,
        string|callable|null $repository = null,
        ?string $repositoryMethod = null,
        ?string $grid = null,
        ?bool $read = null,
        ?bool $write = null,
        ?string $formType = null,
        ?array $formOptions = null,
        ?string $redirectToRoute = null,
    ) {
        parent::__construct(
            methods: ['PUT'],
            path: $path,
            routePrefix: $routePrefix,
            template: $template,
            shortName: $shortName ?? 'put',
            name: $name,
            provider: $provider,
            processor: $processor,
            responder: $responder,
            repository: $repository,
            repositoryMethod: $repositoryMethod,
            grid: $grid,
            read: $read,
            write: $write,
            formType: $formType,
            formOptions: $formOptions,
            redirectToRoute: $redirectToRoute,
        );
    }
}