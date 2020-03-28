<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\CompletedTodoController;
use Psr\Container\ContainerInterface;

class CompletedTodoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $todoModel = $container->get('TodoModel');
        return new CompletedTodoController($todoModel);
    }
}