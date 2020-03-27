<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'TodoPageController');

    $app->get('/todos', 'SeeAllTodosController');

    $app->post('/todos', 'AddTodoController');

    $app->delete('/todos', 'DeleteTodoController');

};
