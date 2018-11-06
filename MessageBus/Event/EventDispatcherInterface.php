<?php

/**
 * This file is part of the Vection project.
 * Visit project at https://www.vection.de
 *
 * (c) Vection <project@vection.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vection\Contracts\MessageBus\Event;

/**
 * Interface EventDispatcherInterface
 *
 * @package Vection\Contracts\MessageBus\Event
 */
interface EventDispatcherInterface
{
    /**
     * @param EventInterface $event
     */
    public function dispatch(EventInterface $event);
}