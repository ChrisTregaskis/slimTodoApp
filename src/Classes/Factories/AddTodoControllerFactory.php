<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\AddTodoController;
use Psr\Container\ContainerInterface;

class AddTodoControllerFactory
{
    /**
     * Use as function to build AddTodoController Odj
     * Grabs renderer and model from DIC and instantiates Controller
     *
     * @param ContainerInterface $container //DIC with access to renderer and model
     * @return AddTodoController //instantiates Controller
     */
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $todoModel = $container->get('TodoModel');
        return new AddTodoController($renderer, $todoModel);
    }
}