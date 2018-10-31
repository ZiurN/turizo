<div class="instagram-header">
	<div class="instagram-foto">
		<img src="<?php echo $_REQUEST['urlFotoPerfil'];?>" alt="">
	</div>
	<div class="instagram-nombre">
		<h1><?php echo $_REQUEST['nombre'];?></h1>
	</div>
	<div class="instagram-datos">
		<ul>
		<li><span><?php echo $_REQUEST['publicaciones'];?></span> publicaciones</li>
		<li><span><?php echo $_REQUEST['seguidores'];?></span> seguidores</li>
		<li><span><?php echo $_REQUEST['seguidos'];?></span> seguidos</li>
		</ul>
	</div>
	<div class="instagram-bio">
		<?php echo $_REQUEST['biografia'];?>
	</div>
</div>