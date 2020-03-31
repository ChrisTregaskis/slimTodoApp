<?php

namespace TodoApp\Controllers;

use PHPUnit\Framework\TestCase;
use TodoApp\Models\TodoModel;

class EditTodoControllerTest extends TestCase
{
    /**
     *  Testing that the EditTodoController successfully instantiates
     *  with renderer and model
     */
    public function testConstruct()
    {
        $todoModel = $this->createMock(TodoModel::class);
        $case = new EditTodoController($todoModel);
        $expected = EditTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
