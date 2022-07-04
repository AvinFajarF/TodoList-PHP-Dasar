<?php

require_once '../model/TodoList.php';
require_once '../Logic/showTodoList.php';
require_once '../test/testViewAdd.php';
require_once '../view/ViewAdd.php';
require_once '../Logic/addTodoList.php';

addTodoList('Avin');
addTodoList('Fajar');
addTodoList('Fitriansyah');

show();
ViewAddTodo();

show();