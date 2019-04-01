<?php
// ATENCIL - Atendimento Fácil é um sistema criado e mantido pela Vila do Site.
// Mais informações em:   viladosite.com.br/atencil

// Este arquivo monta as funções utilizadas para operações com usuários



function select_user($selecteduserid) {
	// Define a variável do usuário selecionado
	$seluserid = $selecteduserid;
}



function create_user() {

}



function delete_user() {
	
}



function edit_user() {
	
}




if (isset($_post['select'])) {select_user($_post['select']);}
if (isset($_post['create'])) {create_user();}
if (isset($_post['delete'])) {delete_user();}
if (isset($_post['edit'])) {edit_user();}


?>