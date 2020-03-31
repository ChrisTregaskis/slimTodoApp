<?php

namespace TodoApp\Controllers;

use PHPUnit\Framework\TestCase;
use TodoApp\Models\TodoModel;

class CompletedTodoControllerTest extends TestCase
{
    /**
     *  Testing that the CompletedTodoController successfully instantiates with model
     */
    public function testConstruct()
    {
        $todoModel = $this->createMock(TodoModel::class);
        $case = new CompletedTodoController($todoModel);
        $expected = CompletedTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}