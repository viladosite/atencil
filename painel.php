<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
$nivel_necessario = 1;
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
  // Destrói a sessão por segurança
  session_destroy();
  // Caso o usuário não atenda os requisitos de nivel assume o comportamento abaixo
  header("Location: /index.html"); exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Atencil - Painel</title>
    <link rel="stylesheet" type="text/css"  href="estilo_painel_atual.css" /> 
</head>

<body>

  <div id="site">
  <p> <?php echo $_SESSION['UsuarioNome'] ?></p>



  <div id="header"></div>
  <div id="conteudo">
    <div id="conteudo-left">
      <?php  
        include "menu.php";
      ?>
    </div>
    <div id="conteudo-right"></div>
  </div>
  <div id="footer"></div>

  </div>

  
</body>

</html>
