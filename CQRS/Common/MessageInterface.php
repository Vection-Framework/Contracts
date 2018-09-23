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

namespace Vection\Contracts\CQRS\Common;

/**
 * Interface MessageInterface
 *
 * @package Vection\Contracts\CQRS\Common
 */
interface MessageInterface
{
    /**
     * Returns an unique string for this message.
     * This string is used to identify this message.
     *
     * @return string
     */
    public function msgID(): string;

    /**
     * Returns an instance of \DateTime that contains
     * the time this message was created.
     *
     * @return \DateTime
     */
    public function msgCreatedTime(): \DateTime;

    /**
     * Returns the payload object which contains
     * all message data as key value pair.
     * 
     * @return PayloadInterface
     */
    public function payload(): PayloadInterface;
}