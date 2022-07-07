<?php

namespace Entity{
    class TodoList{

        private string $todo;

        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        public function getTodo()
        {
            return $this->todo;
        }

        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }
    }
}