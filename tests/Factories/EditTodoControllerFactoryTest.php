<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use TodoApp\Controllers\EditTodoController;
use TodoApp\Models\TodoModel;

class EditTodoControllerFactoryTest extends TestCase
{
    /**
     *  Testing that the EditTodoControllerFactory successfully instantiates
     *  EditTodoController with renderer and model
     */
    public function testInvoke()
    {
        $todoModel = $this->createMock(TodoModel::class);
        $case = new EditTodoController($todoModel);
        $expected = EditTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
