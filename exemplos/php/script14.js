async function buscar() {

  const response =
    await fetch("server14.php");

  const texto =
    await response.text();

  document.getElementById("resultado")
    .innerText = texto;
}