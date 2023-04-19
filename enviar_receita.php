<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtenha os dados do formulário de envio de receita
  $nome = htmlspecialchars($_POST["nome"]);
  $email = htmlspecialchars($_POST["email"]);
  $receita = htmlspecialchars($_POST["receita"]);

  // Salve os dados da receita em um arquivo de texto
  $arquivo = fopen("receitas.txt", "a");
  fwrite($arquivo, "Nome: " . $nome . "\n");
  fwrite($arquivo, "Email: " . $email . "\n");
  fwrite($arquivo, "Receita: " . $receita . "\n\n");
  fclose($arquivo);

  // Redirecione de volta para a página de envio de receita
  header("Location: contato.html?enviado=true");
  exit;
}
?>
