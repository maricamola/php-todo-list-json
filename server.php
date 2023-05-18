<?php

$json_string = file_get_contents('todo-list.json');

$list = json_decode($json_string);

//Quando axios invia in POST todoItem, lo pusho nell'array
if (isset($_POST['todoItem'])) {
  $list[] = $_POST['todoItem'];
  filePut($list);
}

//funzione
function filePut($list)
{
  file_put_contents('todo-list-json', json_encode($list));
}



header('Content type: application/json');
echo json_encode($list);