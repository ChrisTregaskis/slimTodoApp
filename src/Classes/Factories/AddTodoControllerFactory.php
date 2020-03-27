<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\AddTodoController;
use Psr\Container\ContainerInterface;

class AddTodoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $todoModel = $container->get('TodoModel');
        return new AddTodoController($renderer, $todoModel);
    }
}