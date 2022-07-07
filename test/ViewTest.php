<?php

require_once __DIR__. ('/../Repository/RepositoryTodo.php');
require_once __DIR__. ('/../Entity/TodoList.php');
require_once __DIR__. ('/../Service/TodoListService.php');
require_once __DIR__. ('/../Input/InputHelper.php');
require_once __DIR__. ('/../view/ViewTodoList.php');


function TestViewShow(){

    $todoListRepository = new \Repository\RepositoryTodoListIMPL();
    $todoListService = new \Service\TodoListServiceIMPL($todoListRepository);
    $todoListView = new \View\viewTodoList($todoListService);

    $todoListService->AddTodoList("Cyber Security");
    $todoListService->AddTodoList("Cyber Security Profesional");

    $todoListView->ShowTodoList();


}

TestViewShow();