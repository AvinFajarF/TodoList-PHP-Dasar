<?php

require_once "../model/TodoList.php";
require_once "../Logic/addTodoList.php";

addTodoList("Belajar PHP web");
addTodoList("Belajar PHP unit test");
addTodoList("belajar PHP MVC");

global $todolist;

var_dump($todolist);