<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\SeeAllTodosController;
use Psr\Container\ContainerInterface;

class SeeAllTodosControllerFactory
{
    /**
     * Use as function to build SeeAllTodosController Odj
     * Grabs renderer and model from DIC and instantiates Controller
     *
     * @param ContainerInterface $container //DIC with access to renderer and model
     * @return SeeAllTodosController //instantiates Controller
     */
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $todoModel = $container->get('TodoModel');
        return new SeeAllTodosController($renderer, $todoModel);
    }
}