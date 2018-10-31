<?php

if(isset($_POST['numero'])){
	
	switch($_POST['numero']){
		case 0;
		?>
			<h1>Cicatrices</h1>
			<div>ESTE ES UNA PRUEBA DE PHP a ver si fuunciones</div>
		<?php
		break;
			
		case 1;
		?>
			<h1>Peeling Químico</h1>
			<div>ESTE ES UNA PRUEBA DE PHP a ver si fuunciones</div>
		<?php
		break;
		case 2;
		?>
			<h1>Sensualización de Labios</h1>
			<div>ESTE ES UNA PRUEBA DE PHP a ver si fuunciones</div>
		<?php
		break;
		case 3;
		?>
			<h1>Nutrientes con Microneedlign</h1>
			<div>ESTE ES UNA PRUEBA DE PHP a ver si fuunciones</div>
		<?php
		break;
		case 4;
		?>
			<h1>PRP - Plasma Rico en Plaquetas</h1>
			<div>ESTE ES UNA PRUEBA DE PHP a ver si fuunciones</div>
		<?php
		break;
		case 5;
		?>
			<h1>Contorno Facial </h1>
			<div>ESTE ES UNA PRUEBA DE PHP a ver si fuunciones</div>
		<?php
		break;
		case 6;
		?>
			<h1>Borrador de Arrugas</h1>
			<div>ESTE ES UNA PRUEBA DE PHP a ver si fuunciones</div>
		<?php
		break;
	}
}else {
	echo "Funciona AJAX pero no el swicht o el get";
}
	
