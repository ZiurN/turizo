<?php

//include_once $_SERVER['DOCUMENT_ROOT'].'/app/config.inc.php';

class Conexion {
	
	private static $conexion;
	
	public static function abrir_conexion() {
		
		if (!isset(self::$conexion)){
			
			try{
				$nombre_servidor = 'localhost';
				$nombre_usuario = 'drturizo_usuario';
				$password = '@ziur11235813213455';
				$nombre_DB = 'drturizo_db';
				
				self::$conexion = new PDO("mysql:host=$nombre_servidor; dbname=$nombre_DB", $nombre_usuario, $password);
				
				self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				self::$conexion -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				
				self::$conexion -> exec("SET CHARACTER SET utf8");
				
				//print "conexión abierta <br>";
				
			} catch(PDOException $ex) {
				
				print "ERROR: ". $ex ->getMessage()."<br>";
				die();
			}
		}
	}
	
	public static function cerrar_conexion(){
		
		if (isset (self::$conexion)){
			
			self::$conexion = null;
			
			//print "conexión CERRADA";
		}
	}
	
	public static function obtener_conexion() {
		
		return self::$conexion;
	}
	
	public static function obtener_id_ultima_insercion(){
		
		return self::$conexion -> lastInsertId();

	}
}
