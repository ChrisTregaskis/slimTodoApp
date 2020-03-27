<?php

namespace TodoApp\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\PhpRenderer;
use TodoApp\Models\TodoModel;

class AddTodoController
{
    private $renderer;
    private $todoModel;

    public function __construct(PhpRenderer $renderer, TodoModel $todoModel)
    {
        $this->renderer = $renderer;
        $this->todoModel = $todoModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        //Call method from model to pass input into args
        $data = $request->getParsedBody();
        $todo = $data['todo'];
        $args['newTodo'] = $this->todoModel->createTodo($todo);
        //Add redirect to sell all todos
        $response = $response->withRedirect('/todos');

        return $this->renderer->render($response, 'alltodospage.phtml', $args);
    }
}
