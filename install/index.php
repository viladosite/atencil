<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Carregamento do head -->
        <?php require '../includes/at_head.php'; ?>
    </head>

    <body class="animsition">
        <div class="page-wrapper">
        
            <!-- Carregamento do conteúdo da página -->
            <?php require 'install_step1.php'; ?>
        
            <!-- Carrega os avisos e modais da página -->
            <?php include '../includes/at_modal_terms.php' ?>

        </div>

        <!-- Carregamento dos scripts -->
        <?php require '../includes/at_scripts.php'; ?>
    </body>

</html>