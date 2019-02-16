<?php

include_once "conexion.inc.php";
include_once "form.inc.php";
include_once "repositorio-form.inc.php";
include_once "envio-correos.inc.php";

if(isset($_POST['Remitente']) && isset($_POST['Correo'])){
	
	$nombre = $_POST['Remitente'];
	$correo = $_POST['Correo'];
	$comentario = $_POST['Comentario'];
	if($comentario === '' || is_null($comentario)){
		$comentario = 'Ningún Comentario';
	}
	$sugerencia = $_POST['Sugerencia'];
	if($sugerencia === '' || is_null($sugerencia)){
		$sugerencia = 'Ninguna Sugerencia';
	}
	
	Conexion::abrir_conexion();
	
	$form = new form('',$nombre, $correo, $comentario, $sugerencia );
	
	repositorio_comentarios::insertar_comentario(Conexion::obtener_conexion(),$form);
	
	$form_insertado = repositorio_comentarios::obtener_comentario_por_nombre(Conexion::obtener_conexion(), $nombre);
	
	$nombre_insertado = $form_insertado -> obtener_nombre();
	$correo_insertado = $form_insertado -> obtener_correo();
	$comentario_insertado = $form_insertado -> obtener_comentario();
	$sugerencia_insertada = $form_insertado -> obtener_sugerencia();
	
	correos::enviar_correo_confirmacion($correo_insertado, $nombre_insertado);
	correos::enviar_correo_miguel($correo_insertado, $nombre_insertado, $comentario_insertado, $sugerencia_insertada);
	
	echo 'Gracias!! '.$nombre_insertado.', enviamos su correo, '.$correo_insertado.' al Dr. Miguel Turizo para que se comunique contigo vía email a la mayor brevedad.';
	
}else{
	echo 'Hubo un problema con tu comentario, por favor intentalo de nuevo más tarde';	
}