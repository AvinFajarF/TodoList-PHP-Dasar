<?php

namespace Repository{

    use Entity\TodoList;

    interface RepositoryTodo{

        function save(TodoList $todoList): void;

        function remove(int $number): bool;

        function FindAll(): array;
    }


    class RepositoryTodoListIMPL implements RepositoryTodo{

        public array $todo = [];

        function save(TodoList $todoList): void
        {
            $number = sizeof($this->todo) + 1;
            $this->todo[$number] = $todoList;
            echo "Sukses menambah Todo" . PHP_EOL;
        }

        function remove(int $number): bool
        {
            if ($number > $this->todo){
                return false;
            }

            for ($i = $number; $i < sizeof($this->todo); $i++){
                $this->todo[$i] = $this->todo[$i + 1];
            }
            unset($this->todo[sizeof($this->todo)]);

            return true;
        }

        function FindAll(): array
        {
            return $this->todo;
        }
    }


}