<?php

namespace TodoApp\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use TodoApp\Models\TodoModel;

class DeleteTodoController
{
    private $todoModel;

    /**
     * Constructor to instantiate DeleteTodoController from controller factory
     *
     * @param TodoModel $todoModel // takes todoModel from factory
     */
    public function __construct(TodoModel $todoModel)
    {
        $this->todoModel = $todoModel;
    }

    /**
     * grabs the id from the request body, passes into the todoModel delete method
     * then redirects back to the todospage
     *
     * @param Request $request //takes input from JS fetch request
     * @param Response $response //is the redirect
     * @param $args //is empty
     * @return \Psr\Http\Message\ResponseInterface //renders the main page
     */
    public function __invoke(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        $id = $data['id'];
        $this->todoModel->deleteTodo($id);

        return $response->withRedirect('/todos');
    }

}