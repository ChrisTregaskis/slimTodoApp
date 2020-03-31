<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use TodoApp\Controllers\SeeAllTodosController;
use TodoApp\Models\TodoModel;
use Slim\Views\PhpRenderer;

class ASeeAllTodosControllerFactoryTest extends TestCase
{
    /**
     *  Testing that the SeeAllTodosControllerFactory successfully instantiates
     *  SeeAllTodosController with renderer and model
     */
    public function testInvoke()
    {
        $mockRenderer = $this->createMock(PhpRenderer::class);
        $todoModel = $this->createMock(TodoModel::class);
        $case = new SeeAllTodosController($mockRenderer, $todoModel);
        $expected = SeeAllTodosController::class;
        $this->assertInstanceOf($expected, $case);
    }
}
