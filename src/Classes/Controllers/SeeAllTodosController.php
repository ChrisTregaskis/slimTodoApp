<?php

namespace TodoApp\Controllers;

use Slim\Views\PhpRenderer;
use TodoApp\Models\TodoModel;

class SeeAllTodosController
{
    private $renderer;
    private $todoModel;

    public function __construct(PHPRenderer $renderer, TodoModel $todoModel)
    {
        $this->renderer = $renderer;
        $this->todoModel = $todoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $args['allTodos'] = $this->todoModel->getAllTodos();

        return $this->renderer->render($response, 'alltodospage.phtml', $args);
    }
}
