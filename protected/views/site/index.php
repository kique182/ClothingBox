<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name; ?>

<div class="main">
	<div id="mi-slider" class="mi-slider">
		<ul>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/1.png" alt="img01"><h4>Botas</h4></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/2.png" alt="img02"><h4>Casuales</h4></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/3.png" alt="img03"><h4>Elegantes</h4></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/4.png" alt="img04"><h4>Deportivos</h4></a></li>
		</ul>
		<ul>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/5.png" alt="img05"><h4>Chaquetas</h4></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/6.png" alt="img06"><h4>Camisas</h4></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/7.png" alt="img07"><h4>Pantalones</h4></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/8.png" alt="img08"><h4>Chemisse</h4></a></li>
		</ul>
		<ul>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/9.png" alt="img09"><h4>Relojes</h4></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/10.png" alt="img10"><h4>Carteras</h4></a></li>
			<li><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/7.jpg" alt="img11"><h4>Lentes</h4></a></li>
		</ul>
		
		<nav>
			<a href="#">Zapatos</a>
			<a href="#">Ropa</a>
			<a href="#">Accesorios</a>
								
		</nav>
	</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/js/jquery.catslider.js"></script>
<script>
	$(function() {

		$( '#mi-slider' ).catslider();

	});
</script>
 </br></br></br></br>
<div class="caja">    
	
	<div class="informacion">
		<a href="politicas.php">Políticas de Privacidad</a>
		</br> </br>
		<a href="politicas.php">Terminos y Condiciones</a>
		</br> </br>
		<a href="politicas.php">Empresas de Envio</a>
		</br> </br>
		<a href="politicas.php">Iniciar Sesion</a>
		</br> </br>
		<a href="politicas.php">Acerca de ClothingBox</a>
	</div>
	<table class="facebook">
	
		<tr><td><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/facebook.png"></td></tr>
		<tr><td><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/instagram.png"></td></tr>
		<tr><td><img src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/twitter.png"></td></tr>
		
	
	</table>

	<div class="envios">
	<img style="display:block;" src="<?php echo Yii::app()->request->baseUrl; ?>/js/images/envios.jpg">

	</div> 

</div>   


