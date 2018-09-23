<?php

/**
 * This file is part of the Vection project.
 * Visit project at https://www.vection.org
 *
 * (c) Vection <project@vection.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vection\Contracts\Event;

/**
 * Interface EventInterface
 *
 * @package Vection\Contracts\Event
 */
interface EventInterface
{
    /**
     * Stops the propagation of the event to further event handlers.
     */
    public function stopPropagation();

    /**
     * Returns true if the further propagation has been stopped
     * otherwise this method returns false.
     *
     * @return bool Whether the propagation was already stopped.
     */
    public function isPropagationStopped(): bool;

}