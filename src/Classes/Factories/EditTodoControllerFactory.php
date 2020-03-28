<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\EditTodoController;
use Psr\Container\ContainerInterface;

class EditTodoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $todoModel = $container->get('TodoModel');
        return new EditTodoController($todoModel);
    }
}