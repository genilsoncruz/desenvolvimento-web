async function buscar() {

  const response =
    await fetch("server15.php");

  const dados =
    await response.json();

  document.getElementById("resultado")
    .innerText =
      JSON.stringify(dados, null, 2);
}