<!DOCTYPE html>
<html>
<body>

<form method="GET">
  <input name="nome" placeholder="Digite seu nome">
  <button>Enviar</button>
</form>

<?php

if (isset($_GET['nome'])) {
  echo "Olá, " . $_GET['nome'];
}

?>

</body>
</html>