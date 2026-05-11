<!DOCTYPE html>
<html>
<body>

<form method="POST">

  <input
    name="email"
    placeholder="Email"
  >

  <input
    type="password"
    name="senha"
    placeholder="Senha"
  >

  <button>Entrar</button>

</form>

<?php

$emailCorreto = "admin@email.com";
$senhaCorreta = "123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if (
    $email == $emailCorreto &&
    $senha == $senhaCorreta
  ) {
    echo "Login válido!";
  } else {
    echo "Login inválido!";
  }
}

?>

</body>
</html>