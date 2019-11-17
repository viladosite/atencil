<?php

// Remove os arquivos relacionados à instalação
unlink('install_move.php');
unlink('install_step1.php');
unlink('install_step2.php');
unlink('install_script.php');
unlink('config_sample.php');
// unlink('atencil.sql');
unlink(__FILE__);

// Direcionamento caso o procedimento seja concluído corretamente
header("Location: index.php");


?>