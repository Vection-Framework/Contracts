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

use Vection\Contracts\MessageBus\MessageInterface;

/**
 * Interface EventInterface
 *
 * @package Vection\Contracts\MessageBus\Event
 */
interface EventInterface extends MessageInterface, \Vection\Contracts\Event\EventInterface
{
    # TYPE SAFETY
}