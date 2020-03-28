<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\ReinstateTodoController;
use Psr\Container\ContainerInterface;

class ReinstateTodoControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $todoModel = $container->get('TodoModel');
        return new ReinstateTodoController($todoModel);
    }
}