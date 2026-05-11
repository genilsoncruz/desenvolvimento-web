<?php

file_put_contents(
  "dados.txt",
  "Olá arquivo!\n",
  FILE_APPEND
);

echo "Salvo com sucesso!";
?>