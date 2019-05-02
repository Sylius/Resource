<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Resource\Exception;

/**
 * @author Grzegorz Sadowski <grzegorz.sadowski@lakion.com>
 */
class RaceConditionException extends ResourceException
{
    /**
     * @param \Exception $previous
     */
    public function __construct(\Exception $previous = null)
    {
        parent::__construct(
            'Operated entity was previously modified.',
            'race_condition_error',
            null !== $previous ? $previous->getCode() : 0,
            $previous
        );
    }
}
