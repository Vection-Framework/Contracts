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

namespace Vection\Contracts\Validator\Schema\Json;

/**
 * Interface JsonTypeInterface
 *
 * @package Vection\Contracts\Validator\Schema\Json
 *
 * @author David Lung <vection@davidlung.de>
 */
interface JsonTypeInterface
{
    /**
     * @return string|null
     */
    public function getName(): ? string;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @return bool
     */
    public function isRequired(): bool;

    /**
     * @param array $schema
     */
    public function evaluate(array $schema): void;

    /**
     * @param $value
     *
     * @throws JsonPropertyExceptionInterface
     */
    public function validate($value): void;
}