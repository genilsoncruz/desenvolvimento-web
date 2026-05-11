<?php

$conteudo = file_get_contents("dados.txt");

echo nl2br($conteudo);

?>