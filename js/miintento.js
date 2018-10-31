window.onload = init();

function init(){
	"use strict";
	//PARA EL MENU BOTON//
	var tipoPantalla  = definidoPantalla();
	var menuExtendido = false;
	var menuCentrado = true;
	var itemsMenu = document.getElementsByClassName('item-menu');
	var botonMenu = document.getElementById('menulogo');
	var menuContenedor = document.getElementById('contenedor-menu-circular');
	var logoTexto = document.getElementById('logo-texto');
	
	var botonVolver1 = document.getElementById('cirugia-seccion-boton');
	var botonVolver2 = document.getElementById('estetica-seccion-boton');
	var listaContenedor1 = document.getElementById('cirugia-seccion-listado');
	var listaContenedor2 = document.getElementById('estetica-seccion-listado');
	var enBlanco1 = document.getElementById('cirugia-seccion-php');
	var enBlanco2 = document.getElementById('estetica-seccion-php');
	
	botonVolver1.addEventListener('click', function(){
			listaContenedor1.classList.toggle('listado-cirugia-corrido');
			enBlanco1.classList.toggle('contenido-seccion-mostrado');
	});
	botonVolver2.addEventListener('click',function(){
			listaContenedor2.classList.toggle('listado-cirugia-corrido');
			enBlanco2.classList.toggle('contenido-seccion-mostrado');
	} );
	

	window.addEventListener('load', function(){
		asignarListeners(itemsMenu);
		feedInstagram();
		asignarAListas();
	});
	
	window.addEventListener('click', function(){
		if(menuExtendido === true){
			mostrarMenu();
		}
	});
	
	botonMenu.addEventListener('click',function(e){
		e.stopPropagation();
		mostrarMenu();
	}, true);
	
	function definidoPantalla(){
		var anchoPantalla = screen.width;
		var tamanoPantalla;
		if(anchoPantalla < 1024){
			tamanoPantalla = 0;
		}else if(anchoPantalla >= 1024 && anchoPantalla < 1200){
			tamanoPantalla = 1;
		}else if(anchoPantalla >= 1200){
			tamanoPantalla = 2;
		}
		return tamanoPantalla;
	}
		
	function mostrarMenu(){
		var menu = document.getElementById('menuextendido');	
		menu.classList.toggle('menu-extendido');
		
		if(menuCentrado){
			logoTexto.classList.toggle('logo-texto-opaco');
			botonMenu.classList.toggle('borde-animado');
		}
		if(!menuCentrado){
			menuContenedor.classList.toggle('contenedor-menu-circular-abajo-extendido');
			botonMenu.classList.toggle('menu-logo-abajo-extendido');
			botonMenu.classList.remove('borde-animado');
		}
		menuExtendido = !menuExtendido;
			if(menuExtendido){
				botonMenu.style.filter = "opacity(1)";
			}else{
				botonMenu.style.filter = "opacity(0.5)";
			}
		return menuExtendido;
		
	}
	
	function asignarAListas(){
		
		var listaCirugia = document.getElementsByClassName('cirugia-seccion-item');
		var listaEstetica = document.getElementsByClassName('estetica-seccion-item');
		
		for(var i=0; i<listaCirugia.length; i++){
			
			const n = i;
				listaCirugia[n].addEventListener("click", function(e){
				e.stopPropagation();
				mostrarContenidoitem('cirugia-seccion',n);
			},true);
		}
		for(var j=0; j<listaEstetica.length; j++){
			const m = j;
			
			listaEstetica[m].addEventListener("click", function(e){
				e.stopPropagation();
				
				mostrarContenidoitem('estetica-seccion',m);
			},true);
		}
	}
	
	function asignarListeners(listadoObjetos){
		for(var i = 0; i < listadoObjetos.length; i++){
			var j = i;
			listadoObjetos[j].addEventListener('click',bajarMenu, true);
		}
	}
	
	function bajarMenu(){
		var menu = document.getElementById('menuextendido');
		if(menuCentrado){
			if(tipoPantalla === 0){
				menuContenedor.classList.toggle('contenedor-menu-circular-abajo');
				menu.classList.toggle('menu-extendido');
				logoTexto.style.display = "none";
				botonMenu.classList.toggle('menu-logo-abajo');
				menuExtendido = !menuExtendido;
				
			}else if(tipoPantalla >= 1){
				menuContenedor.classList.toggle('contenedor-menu-circular-abajo');
				menu.classList.remove('menu-extendido-off');
				botonMenu.classList.toggle('menu-logo-abajo');
				logoTexto.classList.remove('logo-texto-opaco');
				logoTexto.classList.add('logo-texto-lateral');
			}
		}
		menuCentrado = false;
		asignarMarco();
	}
	
	function asignarMarco(){
		if(tipoPantalla === 2){
			var anchoPantalla = screen.width;
			var porcentaje = (1200/anchoPantalla)*100;
			var porcentajeMargen = (100%-porcentaje)/2;
			var contenedorMenu = document.getElementById('contenedor-menu-circular');
			if (!menuCentrado){
				contenedorMenu.style.left = porcentajeMargen+"%";
			}
		}
	}
	
	 //Para las secciones del sitio
	var esteticaItem = document.getElementById('estetica');
	esteticaItem.addEventListener('click',function(){
		irSeccion('estetica-seccion');
	});
	var cirugiaItem = document.getElementById('cirugia');
	cirugiaItem.addEventListener('click',function(){
		irSeccion('cirugia-seccion');
	});
	var formacionItem = document.getElementById('formacion');
	formacionItem.addEventListener('click',function(){
		irSeccion('formacion-seccion');
	});
	var logoItem = document.getElementById('logo');
	logoItem.addEventListener('click',function(){
		irSeccion('logo-seccion');
	});
	var contactoItem = document.getElementById('contacto');
	contactoItem.addEventListener('click',function(){
		irSeccion('contacto-seccion');
	});
	
	var currentIndex = 0;
	var currentId = "inicio-seccion";
	var secciones = {"inicio-seccion" : {
						"background-image" : "#0096A9",
						"index" : 0
					},"cirugia-seccion" : {
						"background-image" : "#FFF",
						"index" : 1
					},"estetica-seccion" : {
						"background-image" : "#0096A9",
						"index" : 2
					},"logo-seccion" : {
						"background-image" : "#FFF",
						"index" : 3
					},"contacto-seccion" : {
						"background-image" : "#0096A9",
						"index" : 4
					},"formacion-seccion" : {
						"background-image" : "#FFF",
						"index" : 5
					}
				};
	
	function irSeccion(id){
		var objeto = secciones[id];
		
		//var contenedor = document.getElementById("content");
		var vistaActiva = document.getElementsByClassName('activa');
		var nuevaVistaActiva = document.getElementById(id);
		if(objeto.index > currentIndex){
			vistaActiva[0].classList.add('off');
			vistaActiva[0].style.transform = "translateX(100vw)";
			vistaActiva[0].classList.remove('activa');
			nuevaVistaActiva.classList.add('activa');
			nuevaVistaActiva.style.transform = "translateX(0)";
			nuevaVistaActiva.classList.remove('off');
			document.body.classList.toggle('fondo');
			document.body.style.background = objeto["background-image"];
			
			
		}else if(objeto.index < currentIndex){
			vistaActiva[0].classList.add('off');
			vistaActiva[0].style.transform = "translateX(-100vw)";
			vistaActiva[0].classList.remove('activa');
			nuevaVistaActiva.classList.add('activa');
			nuevaVistaActiva.style.transform = "translateX(0)";
			nuevaVistaActiva.classList.remove('off');
			document.body.classList.toggle('fondo');
			document.body.style.background = objeto["background-image"];
		}
		listaContenedor1.classList.remove('listado-cirugia-corrido');
		enBlanco1.classList.remove('contenido-seccion-mostrado');
		listaContenedor2.classList.remove('listado-cirugia-corrido');
		enBlanco2.classList.remove('contenido-seccion-mostrado');
		currentIndex = objeto.index;
		currentId = id;
	}
	
	function feedInstagram(){
		var url = 'https://api.instagram.com/v1/users/self/?access_token=5624678770.f4dd858.67da54291aa2449a9a8cc3b9dd387fe3';
		var peticion = new XMLHttpRequest();
		peticion.addEventListener('load', function(){
			if(peticion.readyState === 4){
				if(peticion.status === 200){
					var llegada = document.getElementById('instafeed');
					var datos = JSON.parse(peticion.responseText);
					var nombre = datos.data["username"];
					var urlFotoPerfil = datos.data["profile_picture"];
					var fullName = datos.data["full_name"];
					var biografia = datos.data["bio"];
					var webSite = datos.data["website"];
					var publicaciones = datos.data.counts["media"];
					var seguidos = datos.data.counts["follows"];
					var seguidores = datos.data.counts["followed_by"];
					$("#instafeed").load("/instagram.php",{nombre:nombre, urlFotoPerfil:urlFotoPerfil, fullName:fullName, biografia:biografia, webSite:webSite, publicaciones:publicaciones, seguidos:seguidos, seguidores: seguidores});
				}
			}
	}, false);
		peticion.open("get", url, true);
	peticion.send();
}
	
	function mostrarContenidoitem(idContenedor,index){
		
		var id = idContenedor;
		var listaContenedorQuery = id+"-listado";
		var listaContenedor = document.getElementById(listaContenedorQuery);
		var textoQueryPhp = id+"-php";
		var enBlanco = document.getElementById(textoQueryPhp);
		listaContenedor.classList.toggle('listado-cirugia-corrido');
		enBlanco.classList.toggle('contenido-seccion-mostrado');
				
		if(id === 'cirugia-seccion'){
				var peticion = new XMLHttpRequest();
				var url = '/contenido-cirugias.php';
				var contenedor = document.getElementById('cirugia-seccion-rellenar-php');
				peticion.onreadystatechange = function(){
					if(peticion.readyState === 4){
						if(peticion.status === 200){
						contenedor.innerHTML = peticion.responseText;
						sliders();
					}
				}
			};
			peticion.open("post", url, false);
			peticion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			peticion.send("numero="+index);
			if(tipoPantalla === 0){
				$('#cirugia-seccion-titulo').ScrollTo();
			}else{
				
			}
		}
		if(id === 'estetica-seccion'){
				var peticion2 = new XMLHttpRequest();
				var url2 = '/contenido-estetica.php';
				var contenedor2 = document.getElementById('estetica-seccion-rellenar-php');
				peticion2.onreadystatechange = function(){
					if(peticion2.readyState === 4){
						if(peticion2.status === 200){
						contenedor2.innerHTML = peticion2.responseText;
						sliders();
					}
				}
			};
			peticion2.open("post", url2, false);
			peticion2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			peticion2.send("numero="+index);
			if(tipoPantalla === 0){
				$('#estetica-seccion-titulo').ScrollTo();
			}else{
				
			}
		}
	}
	
//Sliders
	
	function sliders(){
		
		var btnMas = document.getElementById('btn-mas');
		var btnMenos = document.getElementById('btn-menos');

		btnMas.addEventListener('click', function () {
			plusDivs(+1);
		});

		btnMenos.addEventListener('click', function () {
			plusDivs(-1);
		});

		var dots = document.getElementsByClassName("dots");

		for (var i = 0; i < dots.length; i++) {
			const j = i;
			dots[j].addEventListener('click', function () {
				currentDiv(j+1);
			});
		}

		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function currentDiv(n) {
			showDivs(slideIndex = n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName('visor-imagen');
			var dots = document.getElementsByClassName("dots");
			if (n > x.length) {
				slideIndex = 1;
			}
			if (n < 1) {
				slideIndex = x.length;
			}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].classList.remove('fa-dot-circle');
				dots[i].classList.add('fa-circle');
			}
			x[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].classList.remove('fa-circle');
			dots[slideIndex - 1].classList.add('fa-dot-circle');
		}

		}
	

}