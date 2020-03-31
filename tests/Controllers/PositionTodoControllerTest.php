<?php

namespace TodoApp\Controllers;

use PHPUnit\Framework\TestCase;
use TodoApp\Models\TodoModel;

class PositionTodoControllerTest extends TestCase
{
    /**
     *  Testing that the PositionTodoController successfully instantiates
     *  with renderer and model
     */
    public function testConstruct()
    {
        $todoModel = $this->createMock(TodoModel::class);
        $case = new PositionTodoController($todoModel);
        $expected = PositionTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
