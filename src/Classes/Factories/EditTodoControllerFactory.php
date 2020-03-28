<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\EditTodoController;
use Psr\Container\ContainerInterface;

class EditTodoControllerFactory
{
    /**
     * Use as function to build EditTodoController Odj
     * Grabs renderer and model from DIC and instantiates Controller
     *
     * @param ContainerInterface $container //DIC with access to renderer and model
     * @return EditTodoController //instantiates Controller
     */
    public function __invoke(ContainerInterface $container)
    {
        $todoModel = $container->get('TodoModel');
        return new EditTodoController($todoModel);
    }
}