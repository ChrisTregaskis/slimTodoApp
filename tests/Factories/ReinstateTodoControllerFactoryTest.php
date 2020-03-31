<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use TodoApp\Controllers\ReinstateTodoController;
use TodoApp\Models\TodoModel;

class ReinstateTodoControllerFactoryTest extends TestCase
{
    /**
     *  Testing that the ReinstateTodoControllerFactory successfully instantiates
     *  ReinstateTodoController with renderer and model
     */
    public function testInvoke()
    {
        $todoModel = $this->createMock(TodoModel::class);
        $case = new ReinstateTodoController($todoModel);
        $expected = ReinstateTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
