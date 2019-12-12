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


        // Insere as informações de configuração no novo arquivo config.php
        file_put_contents($configdest, $configs);

        // Inserção dos dados no banco
        $dsn = 'mysql:host=' . $dbhost . ';dbname=' . $dbname;
        $user = $dbuser;
        $password = $dbpass;
        
        try {
            $conn = new PDO($dsn, $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
        // Obtem o banco sql e o insere no servidor
        $sql = file_get_contents('install_db.sql');
        $qr = $conn->exec($sql);



        // Apaga os triggers caso existam
        $triggerdrops = "DROP TRIGGER IF EXISTS client_group_id1block; DROP TRIGGER IF EXISTS company_id1block; DROP TRIGGER IF EXISTS user_group_id1block; DROP TRIGGER IF EXISTS user_id1block;";

        // Monta os triggers para as tabelas
        $trigger1 = "CREATE TRIGGER `client_group_id1block` BEFORE DELETE ON `at_clientgroups` FOR EACH ROW IF old.cligrid IN (1) THEN SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Este grupo não pode ser removido!!'; END IF";

        $trigger2 = "CREATE TRIGGER `company_id1block` BEFORE DELETE ON `at_companies` FOR EACH ROW IF old.companyid IN (1) THEN SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Esta empresa não pode ser removida!!'; END IF";
       
        $trigger3 = "CREATE TRIGGER `user_group_id1block` BEFORE DELETE ON `at_usergroups` FOR EACH ROW IF old.usergroupid IN (1) THEN SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Este grupo não pode ser removido!!'; END IF";
                
        $trigger4 = "CREATE TRIGGER `user_id1block` BEFORE DELETE ON `at_users` FOR EACH ROW IF old.userid IN (1) THEN SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Este usuário é o Superadmin e não pode ser removido!!'; END IF";

        // Agrupa os triggers para inclusão no banco
        $triggers = $triggerdrops . ";" . $trigger1 . ";" . $trigger2 . ";" . $trigger3 . ";" . $trigger4 . ";";
        
        // Inclui os triggers no banco
        $qr2 = $conn->exec($triggers);
        
        
        // Direcionamento caso o procedimento seja concluído corretamente
        header("Location: install_step2.php");


    }

?>