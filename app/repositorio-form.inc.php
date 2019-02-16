<?php

include_once "conexion.inc.php";
include_once "form.inc.php";

class repositorio_comentarios{
	
	public static function insertar_comentario($conexion, $comentario){
		
		$comentario_insertado = false;
		
		if (isset($conexion)){
			
			try{
				
				$sql = "INSERT INTO comentarios (Nombre, Correo, Comentario, Sugerencia) VALUES(:Nombre, :Correo, :Comentario, :Sugerencia)";
	
				$obtener_nombre = $comentario -> obtener_nombre();
				$obtener_correo = $comentario -> obtener_correo();
				$obtener_comentario = $comentario -> obtener_comentario();
				$obtener_sugerencia = $comentario -> obtener_sugerencia();
												
				$sentencia = $conexion -> prepare($sql);
			
				$sentencia -> bindParam(':Nombre', $obtener_nombre, PDO::PARAM_STR);
				$sentencia -> bindParam(':Correo', $obtener_correo, PDO::PARAM_STR);
				$sentencia -> bindParam(':Comentario', $obtener_comentario, PDO::PARAM_STR);
				$sentencia -> bindParam(':Sugerencia', $obtener_sugerencia, PDO::PARAM_STR);
				
				$comentario_insertado = $sentencia -> execute();
				
			} catch ( PDOException $ex){
				
				print '<br>ERROR'. $ex -> getMessage();
			}
		}
		
		return $comentario_insertado;
		
	}
	
	public static function obtener_comentario_por_nombre($conexion, $nombre){
		
		$comentario;
		
		if(isset($conexion)){
			
			try{
				
				$sql = 'SELECT * FROM comentarios WHERE Nombre = \''.$nombre.'\'';
				
				$sentencia = $conexion -> prepare($sql);
				
				$sentencia -> execute();
				
				$resultado = $sentencia -> fetch();
								
				if(count($resultado)){
					
					$comentario = new form($resultado['Id'], $resultado['Nombre'], $resultado['Correo'], $resultado['Comentario'], $resultado['Sugerencia']);
					
				}
				
			}catch(PDOException $ex){
				
				print 'ERROR: '. $ex -> getMessage();
			}
		}
		
		return $comentario;
		
	}
}