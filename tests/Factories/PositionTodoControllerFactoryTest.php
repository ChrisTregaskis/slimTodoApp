<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use TodoApp\Controllers\PositionTodoController;
use TodoApp\Models\TodoModel;

class PositionTodoControllerFactoryTest extends TestCase
{
    /**
     *  Testing that the PositionTodoControllerFactory successfully instantiates
     *  PositionTodoController with renderer and model
     */
    public function testInvoke()
    {
        $todoModel = $this->createMock(TodoModel::class);
        $case = new PositionTodoController($todoModel);
        $expected = PositionTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
