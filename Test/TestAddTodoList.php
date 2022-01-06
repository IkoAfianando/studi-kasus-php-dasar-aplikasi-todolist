<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Iko");
addTodoList("Afianando");
addTodoList("Iko Afianando");

var_dump($todoList);