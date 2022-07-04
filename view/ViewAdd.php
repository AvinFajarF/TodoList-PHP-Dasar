<?php

require_once __DIR__ . '/../Input/input.php';
require_once __DIR__ . '/../Logic/addTodoList.php';
require_once __DIR__ . '/../model/TodoList.php';

function ViewAddTodo(){
    echo 'Menambah data TodoList' . PHP_EOL;
     $result = input('Todo (X untuk exit)');

     if ($result == 'X'){
         echo 'Batal untuk mebambahkan data';
     }else{
         addTodoList($result);
     }
}