<?php

$list = [
  [
    "text" => "Sistemare casa",
    "done" => false
  ],
  [
    "text" => "Seguire il corso Boolean",
    "done" => false
  ],
  [
    "text" => "Preparare il pranzo",
    "done" => false
  ],
  [
    "text" => "Ripassare Vue",
    "done" => false
  ],
  [
    "text" => "Andare in palestra",
    "done" => false
  ],
];

$json_string = json_encode($list);
file_put_contents('todo-list.json', $json_string);