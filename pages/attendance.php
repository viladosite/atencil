<?php if (!isset($_SESSION)) session_start(); ?>

<div id="content">

<?php
//Obtem as configurações do arquivo de config
require "../config.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições
if ($_SESSION['UsuarioNivel'] >= $perm_edit_users):
?>


<!-- Início do conteúdo da página -->




<b> Conteúdo da página de usuários </b>




<!-- Fim do conteúdo da página -->

<?php else: ?>

<!-- Início do conteúdo do erro de permissão -->




<b> Você não tem permissão para visualizar este conteúdo </b>




<!-- Fim do conteúdo do erro de permissão -->

<?php endif; ?>
</div>