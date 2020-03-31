<?php

namespace Tests\Models;

use PHPUnit\Framework\TestCase;
use TodoApp\Models\TodoModel;

class TodoModelTest extends TestCase
{
    /**
     *  Testing to make sure that when called, construct instantiates a DB connection
     */
    public function testConstruct()
    {
        $dbConnection = $this->createMock(\PDO::class);
        $case = new TodoModel($dbConnection);
        $expected = TodoModel::class;
        $this->assertInstanceOf($expected, $case);
    }
}