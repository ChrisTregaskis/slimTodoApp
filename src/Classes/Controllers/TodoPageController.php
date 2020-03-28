<?php

namespace TodoApp\Controllers;

use Slim\Views\PhpRenderer;

class TodoPageController
{
    private $renderer;

    /**
     * Constructor to instantiate the TodoPageController.
     *
     * @param PhpRenderer $renderer instantiated from TodoPageControllerFactory
     */
    public function __construct(PHPRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     *  Used as function to send a http response to todopage.phtml
     *
     * @param $request //is being made from root url '/'
     * @param $response //is empty
     * @param $args //is empty
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke($request, $response, $args)
    {
        return $this->renderer->render($response, 'todopage.phtml', $args);
    }
}