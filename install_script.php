<?php

    if (file_exists('config.php')){
        
        echo "erro";
    
    } else {
        
        // Monta as variáveis com os dados padrão à serem trocados
        $oldhost = 'server.name.com';
        $olduser = 'databaseuser';
        $oldpass = 'databasepass';
        $oldname = 'databasename';
        
        // Monta as variáveis com os dados enviados pelo form
        $dbhost = $_POST['dbhost'];
        $dbuser = $_POST['dbuser'];
        $dbpass = $_POST['dbpass'];
        $dbname = $_POST['dbname'];


        // Define os nomes de arquivos de configuração de origem e de destino
        $configsource = 'config_sample.php';
        $configdest = 'config.php';
        

        // Obtem a configuração do arquivo de exemplo e altera conforme o fornecido no form
        $configs = file_get_contents($configsource);
        $configs = str_replace("\nH",",H",$configs);

        // Insere as informações de configuração no novo arquivo config.php
        file_put_contents($configdest, $configs);
        
    }

?>