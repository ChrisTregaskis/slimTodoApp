<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use TodoApp\Controllers\CompletedTodoController;
use TodoApp\Models\TodoModel;

class CompletedTodoControllerFactoryTest extends TestCase
{
    /**
     *  Testing that the CompletedTodoControllerFactory successfully instantiates
     *  CompletedTodoController with model
     */
    public function testInvoke()
    {
        $todoModel = $this->createMock(TodoModel::class);
        $case = new CompletedTodoController($todoModel);
        $expected = CompletedTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}