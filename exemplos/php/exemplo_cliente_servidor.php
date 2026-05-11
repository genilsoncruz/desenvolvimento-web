<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cliente x Servidor</title>

  <style>
    body {
      font-family: Arial;
      padding: 20px;
    }

    .box {
      margin: 20px 0;
      padding: 20px;
      border-radius: 8px;
      background: #f0f2f5;
    }
  </style>
</head>

<body>

<h1>Cliente x Servidor</h1>

<div class="box">

  <h2>Hora do servidor (PHP)</h2>

  <?php
    date_default_timezone_set("America/Sao_Paulo");

    echo date("d/m/Y H:i:s");
  ?>

</div>

<div class="box">

  <h2>Hora do cliente (JavaScript)</h2>

  <p id="horaCliente"></p>

</div>

<script>

function atualizarHora() {

  const agora = new Date();

  document.getElementById("horaCliente")
    .innerText = agora.toLocaleString();

}

setInterval(atualizarHora, 1000);

</script>

</body>
</html>