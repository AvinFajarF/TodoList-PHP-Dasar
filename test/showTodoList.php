<?php

require_once "../Logic/showTodoList.php";
require_once "../model/TodoList.php";

global $todolist;

$todolist[1] = "Belajar PHP dasar" . PHP_EOL;
$todolist[2] = "Belajar PHP OOP dasar" . PHP_EOL;
$todolist[3] = "Belajar PHP database" . PHP_EOL;

show();
