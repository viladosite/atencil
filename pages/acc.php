<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">
    
<?php
//Obtem as configurações do arquivo de config
require "../config.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UsuarioNivel'] >= $perm_view_editacc):
?>
<!-- Início do conteúdo da página -->

<form action="#">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="user">
    <label class="mdl-textfield__label" for="user">Nome de Usuário</label>
  </div>
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="name">
    <label class="mdl-textfield__label" for="name">Nome Completo</label>
  </div>
</form>

<!-- Fim do conteúdo da página -->
<?php
// Caso o usuário não tenha permissão para visualizar o conteúdo exibe o arquivo de erro
else: include "../includes/at_errorperm.php";

endif; ?>
</div>