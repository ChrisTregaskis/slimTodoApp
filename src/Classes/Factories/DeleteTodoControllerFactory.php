<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\DeleteTodoController;
use Psr\Container\ContainerInterface;

class DeleteTodoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $todoModel = $container->get('TodoModel');
        return new DeleteTodoController($todoModel);
    }
}