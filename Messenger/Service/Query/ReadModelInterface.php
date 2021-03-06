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

declare(strict_types = 1);

namespace Vection\Contracts\Messenger\Service\Query;

use JsonSerializable;

/**
 * Interface ReadModelInterface
 *
 * @package Vection\Contracts\Messenger\Service\Query
 *
 * @author  David Lung <vection@davidlung.de>
 */
interface ReadModelInterface extends JsonSerializable
{
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
     */
    public function toJson(): string;
}
