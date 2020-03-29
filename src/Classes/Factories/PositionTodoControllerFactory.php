<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\PositionTodoController;
use Psr\Container\ContainerInterface;

class PositionTodoControllerFactory
{
    /**
     * Use as function to build PositionTodoController Obj
     * Grabs renderer and model from DIC and instantiates Controller
     *
     * @param ContainerInterface $container //DIC with access to renderer and model
     * @return PositionTodoController //instantiates Controller
     */
    public function __invoke(ContainerInterface $container)
    {
        $todoModel = $container->get('TodoModel');
        return new PositionTodoController($todoModel);
    }
}