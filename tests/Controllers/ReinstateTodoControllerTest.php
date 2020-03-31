<?php

namespace TodoApp\Controllers;

use PHPUnit\Framework\TestCase;
use TodoApp\Models\TodoModel;

class ReinstateTodoControllerTest extends TestCase
{
    /**
     *  Testing that the ReinstateTodoController successfully instantiates
     *  with renderer and model
     */
    public function testConstruct()
    {
        $todoModel = $this->createMock(TodoModel::class);
        $case = new ReinstateTodoController($todoModel);
        $expected = ReinstateTodoController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
