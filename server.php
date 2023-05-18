<?php

$json_string = file_get_contents('todo-list.json');

$list = json_decode($json_string);



header('Content type: application/json');
echo json_encode($list);