# Slim Todo Application

An application built using Slim framework, OOP and MVC. The application stores todos in a MySQL database and uses a combination of PHP and JavaScript to dynamically display, add, edit and delete items. I included a drag and drop feature to re-organise active todos that saves automatically in DB and is reflected upon page load. The application featured autoloading, dependencies managed with composer and unit testing.

### Setup

1. Run `composer install` in root of project
2. Create database with name `chrispyTodoApp` and populate using latest version in db/ or link your own table with columns, `id`, `item`, `complete` and `delete`.
3. Run `composer start` 

### Running tests (INCOMPLETE: TO BE COMPLETED BY CHRIS)

- cd into test directory and run:
```../vendor/bin/phpunit .```

### Routes
- for local development localhost:8080/todos/whatYouRequire as the url

**/todos**

GET
-
