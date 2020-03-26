<?php

namespace TodoApp\Controllers;

use Slim\Views\PhpRenderer;

class SeeAllTodosController
{
    private $renderer;

    public function __construct(PHPRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        return $this->renderer->render($response, 'alltodospage.phtml', $args);
    }
}
