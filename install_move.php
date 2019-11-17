<?php

mkdir('delete');
rename('install_remove.php', 'delete/install_remove.php');
rename('install_step1.php', 'delete/install_step1.php');
rename('install_step2.php', 'delete/install_step2.php');
rename('install_script.php', 'delete/install_script.php');
rename('config_sample.php', 'delete/config_sample.php');
rename('atencil.sql', 'delete/atencil.sql');
rename('install_move.php', 'delete/install_move.php');

// Direcionamento caso o procedimento seja concluído corretamente
header("Location: index.php");


?>