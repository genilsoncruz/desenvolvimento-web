<!-- https://medium.com/@yfaria/fundamentos-backend-1-comunica%C3%A7%C3%A3o-request-response-166dbfabd4f4 -->
<!-- https://www.treinaweb.com.br/blog/o-que-e-http-request-get-post-response-200-404 -->
 
<!DOCTYPE html>
<html>
<body>

<form method="POST">

  <input
    name="email"
    placeholder="Email"
  >

  <button>Enviar</button>

</form>

<?php

if (isset($_POST['email'])) {
  echo "Email recebido: ";
  echo $_POST['email'];
}

?>

</body>
</html>