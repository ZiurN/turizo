<?php

include_once "app/config.inc.php";
include_once "app/conexion.inc.php";
include_once "app/autor.inc.php";

class repositorio_comentarios{
	
	public static function insertar_comentario($conexion, $comentario){
		
		$autor_insertado = false;
		
		if (isset($conexion)){
			
			try{
				
				$sql = "INSERT INTO comentarios (Nombre, Correo, Comentario, Sugerencia) VALUES(:Nombre, :Correo, :Comentario, :Sugerencia)";
	
				$obtener_nombre = $autor -> obtener_nombre();
				$obtener_correo = $autor -> obtener_correo();
				$obtener_comentario = $autor -> obtener_comentario();
				$obtener_sugerencia = $autor -> obtener_sugerencia();
												
				$sentencia = $conexion -> prepare($sql);
			
				$sentencia -> bindParam(':Nombre', $obtener_autor, PDO::PARAM_STR);
				$sentencia -> bindParam(':Correo', $obtener_email, PDO::PARAM_STR);
				$sentencia -> bindParam(':Comentario', $obtener_clave, PDO::PARAM_STR);
				$sentencia -> bindParam(':Sugerencia', $obtener_imagen, PDO::PARAM_STR);
				
				$entrada_insertada = $sentencia -> execute();
				
			} catch ( PDOException $ex){
				
				print '<br>ERROR'. $ex -> getMessage();
			}
		}
		
		return $entrada_insertada;
		
	}
}