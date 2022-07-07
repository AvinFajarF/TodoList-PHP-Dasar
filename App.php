<?php

require_once __DIR__ . '/Entity/TodoList.php';
require_once __DIR__ . '/Service/TodoListService.php';
require_once __DIR__ . '/Repository/RepositoryTodo.php';
require_once __DIR__ . '/Input/InputHelper.php';
require_once __DIR__ . '/view/ViewTodoList.php';

use \Service\TodoListServiceIMPL;
use \Repository\RepositoryTodoListIMPL;
use \View\viewTodoList;

echo "TodoList" . PHP_EOL;

$repository = new RepositoryTodoListIMPL();
$Service    = new TodoListServiceIMPL($repository);
$view       = new viewTodoList($Service);

$view->ShowTodoList();