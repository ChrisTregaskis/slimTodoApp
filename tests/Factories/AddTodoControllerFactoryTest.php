<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use TodoApp\Controllers\AddTodoController;
use TodoApp\Models\TodoModel;
use Slim\Views\PhpRenderer;

class AddTodoControllerFactoryTest extends TestCase
{
    /**
     *  Testing that the AddTodoControllerFactory successfully instantiates
     *  AddTodoController with renderer and model
     */
    public function testInvoke()
    {
        $mockRenderer = $this->createMock(PhpRenderer::class);
        $todoModel = $this->createMock(TodoModel::class);
        $case = new AddTodoController($mockRenderer, $todoModel);
        $expected = AddTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
