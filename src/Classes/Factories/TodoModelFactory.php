<?php

namespace TodoApp\Factories;

use TodoApp\Models\TodoModel;
use Psr\Container\ContainerInterface;

class TodoModelFactory
{
    /**
     * Instantiates a new TodoModel class with a connection to the db via DIC
     *
     * @param ContainerInterface $container // DIC access to get db connection
     * @return TodoModel //an instantiated TodoModel
     */
    public function __invoke(ContainerInterface $container)
    {
        $dbConnection = $container->get('dbConnection');
        return new TodoModel($dbConnection);
    }
}