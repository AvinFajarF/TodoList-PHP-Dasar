<?php

require_once "../model/TodoList.php";
require_once "../Logic/addTodoList.php";
require_once "../Logic/showTodoList.php";
require_once "../Logic/removeTodoList.php";

addTodoList("Belajar PHP web");
addTodoList("Belajar PHP unit test");
addTodoList("belajar PHP MVC");

removeTodoList(2);
show();

removeTodoList(1);
show();


