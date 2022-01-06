<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Iko");
addTodoList("Iko");
addTodoList("Iko");
addTodoList("Afianando");
addTodoList("Afianando");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();
