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

namespace Vection\Contracts\CQRS\Query;

/**
 * Interface QueryResolverInterface
 *
 * @package Vection\Contracts\CQRS\Query
 */
interface QueryResolverInterface
{
    /**
     * Returns a query handler related to the given
     * query object.
     *
     * @param QueryInterface $query
     *
     * @return QueryHandlerInterface
     */
    public function resolve(QueryInterface $query): QueryHandlerInterface;
}