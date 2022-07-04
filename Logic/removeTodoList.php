<?php

/*
 * MENGHAPUS TODOLIST
 */

function removeTodoList(int $number): bool
{
    global $todolist;

    if ($number > $todolist){
        return false;
    }

    for ($i = $number; $i < sizeof($todolist); $i++){
        $todolist[$i] = $todolist[$i + 1];
    }
    unset($todolist[sizeof($todolist)]);

    return true;
}

