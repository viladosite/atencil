<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Direciona para a instalação caso não encontra o config.php
if (file_exists('config.php')){  } else { header("Location: install_step1.php"); }

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require __DIR__ . '/includes/at_core.php';

// Caso o usuário já tenha as permissões de credencial, direciona para o dashboard
if (perm_check($perm_view_dashboard) == true) {
    header("Location: pages/dashboard.php"); exit;
} else {
    session_destroy();
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