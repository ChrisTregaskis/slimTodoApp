<?php

namespace TodoApp\Controllers;

use Slim\Views\PhpRenderer;

class TodoPageController
{
    private $renderer;

    public function __construct(PHPRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        return $this->renderer->render($response, 'todopage.phtml', $args);
    }
}