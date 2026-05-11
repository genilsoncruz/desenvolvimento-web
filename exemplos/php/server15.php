<?php

$usuario = [
  "nome" => "Maria",
  "idade" => 20
];

header("Content-Type: application/json");

echo json_encode($usuario);

?>