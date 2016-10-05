<?php

function autoriza(){
	$ci = get_instance();
	$usuario = $ci->session->userdata("usuario");
	if(!$usuario){
		redirect('/');
	}else{
		return $usuario;
	}
}

function logado(){
	$ci = get_instance();
	$usuario = $ci->session->userdata("usuario");
	if($usuario){
		redirect('/');
	}
}