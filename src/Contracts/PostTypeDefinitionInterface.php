<?php

declare(strict_types=1);

namespace SmitBackend\Wpschemacraft\Contracts;

/**
 * Interface PostTypeDefinitionInterface
 *
 * @package SmitBackend\Wpschemacraft
 */
interface PostTypeDefinitionInterface
{
    public function execute(array $payload = []): mixed;
}
