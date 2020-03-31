<?php

namespace Test\Factories;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use TodoApp\Models\TodoModel;
use TodoApp\Factories\TodoModelFactory;

class TodoModelFactoryTest extends TestCase
{
    /**
     *  Creates a mock container and PDO connection.
     *  Uses get method to return a dbConnection
     *  Instantiates new model factory
     *  expects successfully instantiating a model class with db connection
     */
    public function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $dbConnection = $this->createMock(\PDO::class);
        $container->method('get')->willReturn($dbConnection);
        $factory = new TodoModelFactory();
        $case = $factory($container);
        $expected = TodoModel::class;

        $this->assertInstanceOf($expected, $case);
    }
}
