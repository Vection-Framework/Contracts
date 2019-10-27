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

namespace Vection\Contracts\MessageBus\Command;

/**
 * Interface CommandTransactionInterface
 *
 * @package Vection\Contracts\MessageBus\Command
 */
interface CommandTransactionInterface
{
    /**
     * Begins a new transaction.
     */
    public function begin();

    /**
     * Commits the current transaction.
     */
    public function commit();

    /**
     * Resets all changes made.
     */
    public function rollback();
}
