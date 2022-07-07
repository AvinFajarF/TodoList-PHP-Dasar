<?php

require_once __DIR__. ('/../Repository/RepositoryTodo.php');
require_once __DIR__. ('/../Entity/TodoList.php');
require_once __DIR__. ('/../Service/TodoListService.php');

function Test(){
    $todolistRepositroy = new \Repository\RepositoryTodoListIMPL();
    $todolistRepositroy->todo[] = new \Entity\TodoList('Cyber Security');

    $todolistService    = new \Service\TodoListServiceIMPL($todolistRepositroy);

    $todolistService->ShowTodoList();
}

function TestTodo(){
    $todolistRepositroy = new \Repository\RepositoryTodoListIMPL();
    $todolistService    = new \Service\TodoListServiceIMPL($todolistRepositroy);

    $todolistService->AddTodoList('Pentester Profesional');

    $todolistService->ShowTodoList();
}

function TestTodoRemove(){
    $todolistRepositroy = new \Repository\RepositoryTodoListIMPL();
    $todolistService    = new \Service\TodoListServiceIMPL($todolistRepositroy);

    $todolistService->AddTodoList('Pentester Profesional');
    $todolistService->AddTodoList('Cyber Security Profesional');

    $todolistService->RemoveTodoList(45);
    $todolistService->ShowTodoList();
}


TestTodoRemove();