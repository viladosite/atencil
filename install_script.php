<?php

    if (file_exists('config.php')){
        
        echo "erro";
    
    } else {
        
        // Monta as variáveis com os dados padrão à serem trocados
        $oldhost = 'server.name.com';
        $olduser = 'databaseuser';
        $oldpass = 'databasepass';
        $oldname = 'databasename';
        
        
        
        
        // Monta a variável para descomentar os itens
        $oldcomment = '// define(';
        $oldcomment2 = '/* VARIÁVEIS (VARIABLES)';
        $oldcomment3 = 'VARIÁVEIS (VARIABLES)  */';







        
        
        // Monta as variáveis com os dados enviados pelo form
        $dbhost = $_POST['dbhost'];
        $dbuser = $_POST['dbuser'];
        $dbpass = $_POST['dbpass'];
        $dbname = $_POST['dbname'];
        
        






        // Descomenta as definições de constantes
        $comment = 'define(';


        // Define os nomes de arquivos de configuração de origem e de destino
        $configsource = 'config_sample.php';
        $configdest = 'config.php';
        

        // Obtem a configuração do arquivo de exemplo e altera conforme o fornecido no form
        $configs = file_get_contents($configsource);
        $configs = str_replace($oldhost, $dbhost, $configs);
        $configs = str_replace($olduser, $dbuser, $configs);
        $configs = str_replace($oldpass, $dbpass, $configs);
        $configs = str_replace($oldname, $dbname, $configs);
        $configs = str_replace($oldcomment, $comment, $configs);
        $configs = str_replace($oldcomment2, '', $configs);
        $configs = str_replace($oldcomment3, '', $configs);


        // Insere as informações de configuração no novo arquivo config.php
        file_put_contents($configdest, $configs);
        
    }

?>