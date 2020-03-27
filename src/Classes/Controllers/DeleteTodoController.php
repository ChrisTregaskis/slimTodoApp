<?php

namespace TodoApp\Controllers;

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use TodoApp\Models\TodoModel;

class DeleteTodoController
{
    private $todoModel;

    public function __construct(TodoModel $todoModel)
    {
        $this->todoModel = $todoModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        //grab the id from the request body
        $data = $request->getParsedBody();
        $id = $data['id'];

        //pass into the todoModel delete method
        $this->todoModel->deleteTodo($id);

        //redirect back to the todospage
        return $response->withRedirect('/todos');
    }

}