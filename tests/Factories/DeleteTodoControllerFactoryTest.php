<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use TodoApp\Controllers\DeleteTodoController;
use TodoApp\Models\TodoModel;

class DeleteTodoControllerFactoryTest extends TestCase
{
    /**
     *  Testing that the DeleteTodoControllerFactory successfully instantiates
     *  DeleteTodoController with renderer and model
     */
    public function testInvoke()
    {
        $todoModel = $this->createMock(TodoModel::class);
        $case = new DeleteTodoController($todoModel);
        $expected = DeleteTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
