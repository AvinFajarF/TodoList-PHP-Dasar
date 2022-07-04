<?php

function show(){
    global $todolist;

    echo "TodoList" . PHP_EOL;

    foreach ($todolist as $todo => $value){
        echo "$todo. $value" . PHP_EOL;
    }
}
