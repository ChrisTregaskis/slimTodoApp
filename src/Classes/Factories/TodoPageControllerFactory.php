<?php

namespace TodoApp\Factories;

use TodoApp\Controllers\TodoPageController;
use Psr\Container\ContainerInterface;

class TodoPageControllerFactory
{
    /**
     * Use as function to get renderer from DIC and instantiate TodoPageController Obj
     *
     * @param ContainerInterface $container takes DIC and grabs renderer
     * @return TodoPageController returns instantiated controller
     */
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        return new TodoPageController($renderer);
    }
}