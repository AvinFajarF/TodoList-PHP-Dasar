<?php

require_once __DIR__ . '/../Logic/removeTodoList.php';
require_once __DIR__ . '/../Input/input.php';

function ViewRemoveTodo(){
    echo 'Menghapus Todo' . PHP_EOL;

    $result = input('Nomer (X untuk membatalkan)');

    if ($result == 'X'){
        echo 'Batal menghapus Todo' . PHP_EOL;
    }else{
        $sukses = removeTodoList($result);
        if ($sukses){
            echo "Berhasil menghapus todo $result" . PHP_EOL;
        }else{
            echo "Gagal menghapus $result" . PHP_EOL;
        }
    }
}