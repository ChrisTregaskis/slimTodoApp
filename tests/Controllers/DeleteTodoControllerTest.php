<?php

namespace TodoApp\Controllers;

use PHPUnit\Framework\TestCase;
use TodoApp\Models\TodoModel;

class DeleteTodoControllerTest extends TestCase
{
    /**
     *  Testing that the DeleteTodoController successfully instantiates with model
     */
    public function testConstruct()
    {
        $todoModel = $this->createMock(TodoModel::class);
        $case = new DeleteTodoController($todoModel);
        $expected = DeleteTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
