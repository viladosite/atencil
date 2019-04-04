<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Carrega as configurações para funcionamento do sistema
require 'config.php';

// Carrega as funções para funcionamento do sistema
require 'functions/functions.php';

// Faz a conexão com o banco
require 'at_connect.php';

// Caso o usuário já tenha as permissões de credencial, direciona para o dashboard
if (perm_check($perm_view_dashboard) == true) {
    header("Location: pages/dashboard.php"); exit;
} else {
    session_destroy();
    echo '<script type="text/javascript">window.alert("Você foi deslogado do sistema.");</script>';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Carregamento do head -->
        <?php require 'includes/at_head.php'; ?>
    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- Carregamento do conteúdo da página -->
            <?php require 'pages/content/at_loginform.php'; ?>
        </div>
        <!-- Carregamento dos scripts -->
        <?php require 'includes/at_scripts.php'; ?>
    </body>

</html>