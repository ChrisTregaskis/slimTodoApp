<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\DeleteTodoController;
use Psr\Container\ContainerInterface;

class DeleteTodoControllerFactory
{
    /**
     * Use as function to build DeleteTodoController Odj
     * Grabs renderer and model from DIC and instantiates Controller
     *
     * @param ContainerInterface $container //DIC with access to renderer and model
     * @return DeleteTodoController //instantiates Controller
     */
    public function __invoke(ContainerInterface $container)
    {
        $todoModel = $container->get('TodoModel');
        return new DeleteTodoController($todoModel);
    }
}