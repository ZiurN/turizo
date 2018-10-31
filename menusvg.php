<?php

$tamano = $_REQUEST['tipoPantalla'];

if($tamano === 0){
	include $_SERVER['DOCUMENT_ROOT'].'/img/menu2.svg';
}else{
	include $_SERVER['DOCUMENT_ROOT'].'/img/menu.svg';
}