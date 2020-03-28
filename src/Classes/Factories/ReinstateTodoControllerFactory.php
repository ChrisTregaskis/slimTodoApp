<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\ReinstateTodoController;
use Psr\Container\ContainerInterface;

class ReinstateTodoControllerFactory
{
    /**
     * Use as function to build ReinstateTodoController Odj
     * Grabs renderer and model from DIC and instantiates Controller
     *
     * @param ContainerInterface $container //DIC with access to renderer and model
     * @return ReinstateTodoController //instantiates Controller
     */
    public function __invoke(ContainerInterface $container)
    {
        $todoModel = $container->get('TodoModel');
        return new ReinstateTodoController($todoModel);
    }
}