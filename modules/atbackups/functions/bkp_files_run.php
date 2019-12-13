<?php


// Cria o nome da pasta para o backup removendo acentos, caracteres especiais e espaços
$dirdate = date("Ymd_His");
$dirname = str_replace(' ', '', $bkpname);
$dirname = preg_replace('/\s+/', '', $dirname);
$dirname = preg_replace('/[^A-Za-z0-9]/', '', $dirname);
$dirname = remove_accents($dirname);
if (strlen($dirname) > 10) { $dirname = substr($dirname, 0, 10); };
$bkppath = $dirdate . "_" . $dirname;



?>