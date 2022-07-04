<?php
/**
 * MENAMBAH DATA KE TODO LIST
 */

function addTodoList(String $todo){
    global $todolist;

    $number = sizeof($todolist) + 1;
    $todolist[$number] = $todo;
}