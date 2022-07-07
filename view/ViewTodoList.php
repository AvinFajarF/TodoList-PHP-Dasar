<?php

namespace View{

    use Helper\InputHelper;
    use Service\TodoListServiceIMPL;

    interface TodoListView{

        function ShowTodoList(): void;

        function AddTodoList(string $todo): void;

        function RemoveTodoList(int $todo): void;


    }

    class viewTodoList implements TodoListView{

        private TodoListServiceIMPL $todoListServiceIMPL;

        public function __construct(TodoListServiceIMPL $todo)
        {
            $this->todoListServiceIMPL = $todo;
        }

        function ShowTodoList(): void
        {
            while (true){
               $this->ShowTodoList();

                echo 'Menu';
                echo '1. Menambah Data' . PHP_EOL;
                echo '2. Menghapus Data' . PHP_EOL;
                echo '3. Keluar' . PHP_EOL;

                $result = InputHelper::input("Pilih");

                if ($result == '1'){
                   $this->todoListServiceIMPL->AddTodoList($result);
                }elseif ($result == '2'){
                    $this->todoListServiceIMPL->RemoveTodoList($result);
                }elseif ($result == '3'){
                    break;
                }else{
                    echo 'Data yang anda masukan salah!!!' . PHP_EOL;
                    echo 'Silahkan masukan Data yang valid!' . PHP_EOL;
                }

            }
        }

        function AddTodoList(string $todo): void
        {
            echo 'Menambah data TodoList' . PHP_EOL;
            $result = InputHelper::input('Todo (X untuk exit)');

            if ($result == 'X'){
                echo 'Batal untuk mebambahkan data';
            }else{
                $this->todoListServiceIMPL->AddTodoList($result);
            }
        }

        function RemoveTodoList(int $todo): void
        {
            echo 'Menghapus Todo' . PHP_EOL;

            $result = InputHelper::input('Nomer (X untuk membatalkan)');

            if ($result == 'X'){
                echo 'Batal menghapus Todo' . PHP_EOL;
            }else{
               $this->todoListServiceIMPL->RemoveTodoList($result);


            }
        }
    }
}