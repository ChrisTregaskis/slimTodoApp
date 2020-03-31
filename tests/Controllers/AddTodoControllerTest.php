<?php

namespace TodoApp\Controllers;

use PHPUnit\Framework\TestCase;
use TodoApp\Models\TodoModel;
use Slim\Views\PhpRenderer;

class AddTodoControllerTest extends TestCase
{
    /**
     *  Testing that the AddTodoController successfully instantiates
     *  with renderer and model
     */
    public function testConstruct()
    {
        $mockRenderer = $this->createMock(PhpRenderer::class);
        $todoModel = $this->createMock(TodoModel::class);
        $case = new AddTodoController($mockRenderer, $todoModel);
        $expected = AddTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
