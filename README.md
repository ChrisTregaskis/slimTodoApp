# Slim Todo Application

An application built using Slim framework, OOP and MVC. The application stores todos in a MySQL database and uses a combination of PHP and JavaScript to dynamically display, add, edit and delete items. I included a drag and drop feature to re-organise active todos that saves automatically in DB and is reflected upon page load. The application featured autoloading, dependencies managed with composer and unit testing.

### Setup

1. Run `composer install` in root of project
2. Create database with name `chrispyTodoApp` and populate using latest version in db/ or link your own table with columns, `id`, `item`, `complete`, `position` and `delete`.
3. Run `composer start` 

### Running tests

- cd into the tests directory and run:
```../vendor/bin/phpunit .```

### Routes
- for local development localhost:8080/todos/whatYouRequire as the url

**/todos**

GET 
- Gets all todos from mySQL data base ording them by position
- Used to grab all todos out of DB
- Returns an array of all todos eg: `{ [ "id": "49", "item": "New item to do!", "complete": 0, "delete": 0, "position": 4 ] }`


**/todos**

POST
- Saves a new todo to the todoMasterList table in the database
- Sends new item on 'submit' `{ "item": "New item to do!" }`
- Used to add a new todo to the active todos list
- Returns an array of all todos eg: `{ [ "id": "49", "item": "New item to do!", "complete": 0, "delete": 0, "position": 4 ] }`


**/todos**

DELETE
- Changes a todo's delete flag to 1 in the todoMasterList table in the database
- Used to remove a todo from the active list and not display on the complete list
- Sends id: `{ "id": "int" }`
- Returns true or false depending on success


**/todos/{id}/complete**

PUT
- Changes a todo's complete flag to 1 in the todoMasterList table in database
- Used to move an item to the completed todo pile
- Sends id: `{ "id": "int" }`
- Returns true or false depending on success


**/todos/{id}/reinstate**

PUT
- Changes a todo's complete flag to 0 in the todoMasterList table in database
- Used to reinstate an item back to the active todos pile
- Sends id: `{ "id": "int" }`
- Returns true or false depending on success


**/todos/{id}**

PUT
- Updates todo discription in the todoMasterList table in database
- Used when editing/changing the text of the todo itself
- Sends id and text to update todo eg: `{ "id": "int", "item", "This is an updated text todo!" }`
- Returns true or false depending on success


**/todos/{id}/position**

PUT
- Updates the todo display position in the todoMasterList table in database
- Used in getAllTodos() when grabbing array of todos from DB, order of todos done by Possition
- Sends id: `{ "id": "int" }`
- Returns true or false depending on success
