<?php

namespace Service{

    use Entity\TodoList;
    use Repository\RepositoryTodo;

    interface TodoListService{

        function ShowTodoList(): void;

        function AddTodoList(string $todo): void;

        function RemoveTodoList(int $todo): void;


    }

    class TodoListServiceIMPL implements TodoListService{

        private RepositoryTodo $todo;

        public function __construct(RepositoryTodo $repositoryTodo)
        {
            $this->todo = $repositoryTodo;
        }


        function ShowTodoList(): void
        {
            $todolist = $this->todo->FindAll();

            echo "TodoList" . PHP_EOL;

            foreach ($todolist as $todo => $value){
                echo "$todo. " . $value->getTodo() . PHP_EOL;
            }

        }

        function AddTodoList(string $todo): void
        {
            $todoList = new TodoList($todo);
            $this->todo->save($todoList);
        }

        function RemoveTodoList(int $todo): void
        {
           $sukses = $this->todo->remove($todo);

            if ($sukses){
                echo "Berhasil menghapus todo $sukses" . PHP_EOL;
            }else{
                echo "Gagal menghapus $sukses" . PHP_EOL;
            }
        }
    }

}