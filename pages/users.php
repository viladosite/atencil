<?php
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();
// Pega as configurações e permissões do arquivo de config
require "config.php";
// Verifica se a permissão do usuário é maior ou igual à necessária e monta as exibições -->
if ($_SESSION['UsuarioNivel'] >= $perm_edit_users): ?>

<div id="content">
<b> Conteúdo da página de usuários </b>
<?php $_SESSION['UsuarioNivel'] ?>
</div>

<?php else: ?>

<div id="content">
<b> Você não tem permissão para visualizar este conteúdo </b>
</div>

<?php endif; ?>