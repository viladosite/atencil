<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
// Pega as configurações e permissões do arquivo de config
require "config.php";
?>



<div id="content">
<!-- Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições -->
<?php if ($_SESSION['UsuarioNivel'] >= $perm_edit_users): ?>
<b> Conteúdo da página de usuários </b>

<?php else: ?>
<b> Você não tem permissão para visualizar este conteúdo </b>

<?php endif; ?>
</div>