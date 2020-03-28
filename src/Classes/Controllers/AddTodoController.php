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

    /**
     * Constructor to instantiate AddTodoController from controller factory
     *
     * @param PhpRenderer $renderer //takes render from factory
     * @param TodoModel $todoModel // takes todoModel from factory
     */
    public function __construct(PhpRenderer $renderer, TodoModel $todoModel)
    {
        $this->renderer = $renderer;
        $this->todoModel = $todoModel;
    }

    /**
     * grabs input from request and renders as args
     *
     * @param Request $request //takes input from request
     * @param Response $response //is the redirect
     * @param $args //becomes input data
     * @return \Psr\Http\Message\ResponseInterface //renders the main page
     */
    public function __invoke(Request $request, Response $response, $args)
    {
        //Call method from model to pass input into args
        $data = $request->getParsedBody();
        $todo = $data['todo'];
        $args['newTodo'] = $this->todoModel->createTodo($todo);
        //Add redirect to see all todos
        $response = $response->withRedirect('/todos');

        return $this->renderer->render($response, 'alltodospage.phtml', $args);
    }
}
