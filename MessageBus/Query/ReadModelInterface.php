<?php

/**
 * This file is part of the Vection-Framework project.
 * Visit project at https://github.com/Vection-Framework/Vection
 *
 * (c) Vection-Framework <vection@appsdock.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vection\Contracts\MessageBus\Query;

/**
 * Interface ReadModelInterface
 *
 * @package Vection\Contracts\MessageBus\Query
 */
interface ReadModelInterface extends \JsonSerializable
{
    /**
     * Returns whether this response is empty or not.
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Returns an array that represents the response.
     *
     * @return array
     */
    public function toArray(): array;

    /**
     * Returns the response data in json format.
     *
     * @return string
     * @throws \InvalidArgumentException
     */
    public function toJson(): string;
}
