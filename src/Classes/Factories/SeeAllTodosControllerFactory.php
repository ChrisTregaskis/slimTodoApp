<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\SeeAllTodosController;
use Psr\Container\ContainerInterface;

class SeeAllTodosControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $todoModel = $container->get('TodoModel');
        return new SeeAllTodosController($renderer, $todoModel);
    }
}