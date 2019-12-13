<?php

// Carrega as configurações, funções e elementos base para funcionamento do sistema
require '../../../includes/at_core.php';

// Variáveis com dados do formulário
$bkpid = $_POST['bkpid'];
$bkpdir = $_POST['bkpdir'];
$bkptable = $_POST['bkptable'];

// Variáveis do mod vindas como hidden do form
$modid = $_POST['modid'];
$moddir = $_POST['moddir'];
$modtable = $_POST['modtable'];

// Checagem de conexão
if (!$mysql) { die("A Conexão Falhou: " . mysqli_connect_error()); }


// Prepara a query de remoção do banco
$bkpqr = " DELETE FROM $bkptable WHERE bkp_id = '$bkpid' ";
$bkpdel = mysqli_query($mysql, $bkpqr);

// Executa a remoção do banco e dos arquivos
if ($bkpdel == true) {

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
    
}

?>