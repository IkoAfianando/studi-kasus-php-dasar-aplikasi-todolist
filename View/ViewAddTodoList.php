<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function ViewAddTodoList()
{
    echo "Menambah TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if($todo == "x") {
        echo "Batal Menambah Todo" . PHP_EOL;
    }else {
        addTodoList($todo);
    }
}
