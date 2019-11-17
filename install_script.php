<?php

    if (file_exists('config.php')){
        
        header("Location: index.php");
    
    } else {

        // Caso não tenha sido enviado o host ou usuário, direcionado de volta para o index
        if (empty($_POST['dbhost']) or empty($_POST['dbuser'])) { header("Location: install_step1.php"); exit;}
        
        // -----------------------------------------------------
        // MONTAGEM DOS DADOS PADRÃO PARA A TROCA
        // -----------------------------------------------------

        // Monta as variáveis com os dados padrão à serem trocados
        $oldhost = 'server.name.com';
        $olduser = 'databaseuser';
        $oldpass = 'databasepass';
        $oldname = 'databasename';
        $oldsite = 'http://site.com.br';
        $oldhomedir = 'homedirpath';
                
        
        // Monta as variáveis para descomentar os itens
        $oldcomment = '// define(';
        $oldcomment2 = '/* VARIÁVEIS (VARIABLES)';
        $oldcomment3 = 'VARIÁVEIS (VARIABLES)  */';






        // -----------------------------------------------------
        // DADOS NOVOS PARA INCLUSÃO NO CONFIG
        // -----------------------------------------------------
        
        
        // Monta as variáveis com os dados enviados pelo form
        $dbhost = $_POST['dbhost'];
        $dbuser = $_POST['dbuser'];
        $dbpass = $_POST['dbpass'];
        $dbname = $_POST['dbname'];
        $newsite = $_POST['site'];
        $newdir = $_POST['dir'];

        // Descomenta as definições de constantes
        $comment = 'define(';




        // -----------------------------------------------------
        // PROCEDIMENTOS DE TROCA E SALVAMENTO
        // -----------------------------------------------------

        // Define os nomes de arquivos de configuração de origem e de destino
        $configsource = 'config_sample.php';
        $configdest = 'config.php';
        

        // Obtem a configuração do arquivo de exemplo e altera conforme o fornecido no form
        $configs = file_get_contents($configsource);
        $configs = str_replace($oldhost, $dbhost, $configs);
        $configs = str_replace($olduser, $dbuser, $configs);
        $configs = str_replace($oldpass, $dbpass, $configs);
        $configs = str_replace($oldname, $dbname, $configs);
        $configs = str_replace($oldsite, $newsite, $configs);
        $configs = str_replace($oldhomedir, $newdir, $configs);

        // Descomenta os itens da configuração
        $configs = str_replace($oldcomment, $comment, $configs);
        $configs = str_replace($oldcomment2, '', $configs);
        $configs = str_replace($oldcomment3, '', $configs);


        // Insere as informações de configuração no novo arquivo config.php
        file_put_contents($configdest, $configs);

        
        
        
        // Direcionamento caso o procedimento seja concluído corretamente
        header("Location: install_step2.php");


    }

?>