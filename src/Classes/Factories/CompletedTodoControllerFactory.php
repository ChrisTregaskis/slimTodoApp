<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\CompletedTodoController;
use Psr\Container\ContainerInterface;

class CompletedTodoControllerFactory
{
    /**
     * Use as function to build CompletedTodoController Odj
     * Grabs renderer and model from DIC and instantiates Controller
     *
     * @param ContainerInterface $container //DIC with access to renderer and model
     * @return CompletedTodoController //instantiates Controller
     */
    public function __invoke(ContainerInterface $container)
    {
        $todoModel = $container->get('TodoModel');
        return new CompletedTodoController($todoModel);
    }
}