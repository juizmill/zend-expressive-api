<?php

declare(strict_types=1);

namespace App\Doc;

use Psr\Container\ContainerInterface;

class MethodNotAllowedHandlerFactory
{
    public function __invoke(ContainerInterface $container) : MethodNotAllowedHandler
    {
        return new MethodNotAllowedHandler();
    }
}
