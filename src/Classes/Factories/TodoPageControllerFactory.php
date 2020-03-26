<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\TodoPageController;
use Psr\Container\ContainerInterface;

class TodoPageControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        return new TodoPageController($renderer);
    }
}