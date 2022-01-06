<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function ViewRemoveTodoList()
{
    echo "Menghapus TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");

    if($pilihan == "x") {
        echo "Batal mengahapus Todo " . PHP_EOL;
    }else {
        $success = removeTodoList($pilihan);

        if($success) {
            echo "Sukses menghapus Todo nomor $pilihan" . PHP_EOL;
        }else {
            echo "Gagal menghapus Todo nomor $pilihan" . PHP_EOL;
        }
    }
}
