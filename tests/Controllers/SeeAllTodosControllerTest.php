<?php

namespace TodoApp\Controllers;

use PHPUnit\Framework\TestCase;
use TodoApp\Models\TodoModel;
use Slim\Views\PhpRenderer;

class SeeAllTodosControllerTest extends TestCase
{
    /**
     *  Testing that the SeeAllTodosController successfully instantiates
     *  with renderer and model
     */
    public function testConstruct()
    {
        $mockRenderer = $this->createMock(PhpRenderer::class);
        $todoModel = $this->createMock(TodoModel::class);
        $case = new SeeAllTodosController($mockRenderer, $todoModel);
        $expected = SeeAllTodosController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
