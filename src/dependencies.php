<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    /**
     * Anonymous function that holds connection to db with credentials pulled from settings
     *
     * @param $c //
     * @return PDO //Link to db
     */
    $container['dbConnection'] = function ($c) {
        $settings = $c->get('settings')['db'];
        $db = new PDO($settings['host'] . $settings['dbName'], $settings['userName'], $settings['password']);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    };

    $container['TodoPageController'] = new TodoApp\Factories\TodoPageControllerFactory();
    $container['SeeAllTodosController'] = new TodoApp\Factories\SeeAllTodosControllerFactory();
    $container['TodoModel'] = new TodoApp\Factories\TodoModelFactory();
    $container['AddTodoController'] = new TodoApp\Factories\AddTodoControllerFactory();
    $container['DeleteTodoController'] = new TodoApp\Factories\DeleteTodoControllerFactory();
    $container['CompletedTodoController'] = new TodoApp\Factories\CompletedTodoControllerFactory();
    $container['ReinstateTodoController'] = new TodoApp\Factories\ReinstateTodoControllerFactory();
    $container['EditTodoController'] = new TodoApp\Factories\EditTodoControllerFactory();
    $container['PositionTodoController'] = new TodoApp\Factories\PositionTodoControllerFactory();

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

};
