<?php

namespace TodoApp\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\PhpRenderer;
use TodoApp\Models\TodoModel;

class SeeAllTodosController
{
    private $renderer;
    private $todoModel;

    /**
     * Constructor to instantiate SeeAllTodosController from controller factory
     *
     * @param PhpRenderer $renderer //takes render from factory
     * @param TodoModel $todoModel // takes todoModel from factory
     */
    public function __construct(PHPRenderer $renderer, TodoModel $todoModel)
    {
        $this->renderer = $renderer;
        $this->todoModel = $todoModel;
    }

    /**
     * grabs all data from method in todoModel getAllTodos and sends response to main page
     *
     * @param Request $request //
     * @param Response $response //is the redirect calling main page
     * @param $args //becomes input data that is what is displayed from main page
     * @return \Psr\Http\Message\ResponseInterface //renders the main page
     */
    public function __invoke(Request $request, Response $response, $args)
    {
        $args['allTodos'] = $this->todoModel->getAllTodos();

        return $this->renderer->render($response, 'alltodospage.phtml', $args);
    }
}
