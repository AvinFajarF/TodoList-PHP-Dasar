<?php

require_once __DIR__ . '/Logic/addTodoList.php';
require_once __DIR__ . '/Logic/removeTodoList.php';
require_once __DIR__ . '/Logic/showTodoList.php';
require_once __DIR__ . '/model/TodoList.php';
require_once __DIR__ . '/view/ViewAdd.php';
require_once __DIR__ . '/view/ViewRemove.php';
require_once __DIR__ . '/view/ViewShow.php';
require_once __DIR__ . '/Input/input.php';

echo "TodoList" . PHP_EOL;

ViewShowTodo();