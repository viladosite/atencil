<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require '../../../includes/at_core.php';


// Variáveis do mod vindas como hidden do form
$modid = $_POST['modid'];
$moddir = $_POST['moddir'];
$modtable = $_POST['modtable'];


// Variáveis do backup vindas do form
$bkpname = $_POST['bkpname'];
$bkpwebsite = $_POST['bkpwebsite'];
$bkpcomp = $_POST['bkpcomp'];
$bkpobs = $_POST['bkpobs'];

$bkpftphost = $_POST['bkpftphost'];
$bkpftpuser = $_POST['bkpftpuser'];
$bkpftppass = $_POST['bkpftppass'];
$bkpftpport = $_POST['bkpftpport'];
$bkpdbhost = $_POST['bkpdbhost'];
$bkpdbname = $_POST['bkpdbname'];
$bkpdbuser = $_POST['bkpdbuser'];
$bkpdbpass = $_POST['bkpdbpass'];
$bkpdbport = $_POST['bkpdbport'];



// Condicionais de verificação de preenchimento de campos
if ( empty($bkpname) or empty($bkpwebsite)	or empty($bkpcomp) ) {
	
	// Retorna o erro caso algum campo tenha sido deixado em branco
	echo '<script type="text/javascript">alert("Você não preencheu algum campo básico. Preencha os campos obrigatórios para continuar.");history.go(-1);</script>';

} else {

	// Checagem de conexão
	if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


	// Queries de inserção dos dados
	$bkpsql = "
	INSERT INTO $modtable (bkp_comp, bkp_name, bkp_website, bkp_path, bkp_ftphost, bkp_ftpuser, bkp_ftppass, bkp_ftpport, bkp_dbhost, bkp_dbname, bkp_dbuser, bkp_dbpass, bkp_dbport, bkp_obs)
	VALUES ('$bkpcomp', '$bkpname', '$bkpwebsite', '$bkppath', '$bkpftphost', '$bkpftpuser', '$bkpftppass', '$bkpftpport', '$bkpdbhost', '$bkpdbname', '$bkpdbuser', '$bkpdbpass', '$bkpdbport', '$bkpobs');";

	// Execução de inserção de dados
	$criabkp = mysqli_query($mysql, $bkpsql);

	// Mostra mensagem de confirmação caso o registro funcione
	if ($criabkp == true) {


        // Encerra a conexão
        mysqli_close($mysql);
        
        ?>
        <form id="bkpredir" action="../../../pages/mod_run.php" method="post">
            <input type="hidden" id="modid" name="modid" value="<?php echo $modid; ?>">
            <input type="hidden" id="moddir" name="moddir" value="<?php echo $moddir; ?>">
            <input type="hidden" id="modtable" name="modtable" value="<?php echo $modtable; ?>">
        </form>
        <script type="text/javascript">
            document.getElementById('bkpredir').submit();
        </script>
        <?php
        		

	} else {

		// Mostra o aviso para relogar
		// echo '<script type="text/javascript"> 
	    // window.alert("Houve um erro ao cadastrar o cliente.");
	    // </script>';

	    // Direciona para a tela de login
		// header("Location: ../pages/client_new.php");
		echo mysqli_error($mysql);

	    // Encerra a conexão
		mysqli_close($mysql);
	}

}

?>