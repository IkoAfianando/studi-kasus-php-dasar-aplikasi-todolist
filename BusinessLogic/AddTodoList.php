<?php

/**
 * Menambah Todo ke list
 */

function addTodoList(string $todo)
{
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}


