<?php

require_once __DIR__ . "/../Input/input.php";
require_once __DIR__ . '/../model/TodoList.php';
require_once __DIR__ . '/../view/ViewAdd.php';
require_once __DIR__ . '/../view/ViewRemove.php';
require_once __DIR__ . '../Logic/showTodoList.php';

function ViewShowTodo(){
    while (true){
        show();

        echo 'Menu';
        echo '1. Menambah Data' . PHP_EOL;
        echo '2. Menghapus Data' . PHP_EOL;
        echo '3. Keluar' . PHP_EOL;

        $result = input('Masukan nomer');

        if ($result == '1'){
            ViewAddTodo();
        }elseif ($result == '2'){
            ViewRemoveTodo();
        }elseif ($result == '3'){
            break;
        }else{
            echo 'Data yang anda masukan salah!!!' . PHP_EOL;
            echo 'Silahkan masukan Data yang valid!' . PHP_EOL;
        }

    }
}