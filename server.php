<?php

$json_string = file_get_contents('todo-list.json');

$list = json_decode($json_string);



//Quando axios invia in POST todoItem, lo pusho nell'array
if (isset($_POST['todoItem'])) {
  $newTask = [
    "text" => $_POST['todoItem'],
    "done" => false
  ];
  $list[] = $newTask;
  filePut($list);
}


//Quando ricevo indexToDelete, elimino
if (isset($_POST['indexToDelete'])) {
  $index = $_POST['indexToDelete'];
  array_splice($list, $index, 1);
  filePut($list);
}


//funzione
function filePut($list)
{
  file_put_contents('todo-list.json', json_encode($list));
}


header('Content type: application/json');
echo json_encode($list);
