<?php

class form{
	 
	private $id_envio;
	private $nombre;
	private $correo;
	private $comentario;
	private $sugerencia;
	
	public function __construct($id_envio, $nombre, $correo, $comentario, $sugerencia){
		
		$this -> id_envio = $id_envio;
		$this -> nombre = $nombre;
		$this -> correo= $correo;
		$this -> comentario = $comentario;
		$this -> sugerencia = $sugerencia;
		
	}
	
	public function obtener_id_envio(){
		return $this -> id_envio;
	}
	
	public function obtener_nombre(){
		return $this -> nombre;
	}
	
	public function obtener_correo(){
		return $this -> correo;
	}
	
	public function obtener_comentario(){
		return $this -> comentario;
	}
	
	public function obtener_sugerencia(){
		return $this -> sugerencia;
	}
}
?>