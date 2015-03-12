<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerCoreScript('jquery.ui'); 
//Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'../../js/js/modernizr.custom.63321.js'); 
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/js/css/style.css');?>
<script type="text/javascript" src="../../js/js/modernizr.custom.63321.js"></script>



<div class="main">
				<div id="mi-slider" class="mi-slider">
					<ul>
						<li><a href="#"><img src="../../js/images/1.jpg" alt="img01"><h4>Boots</h4></a></li>
						<li><a href="#"><img src="../../js/images/2.jpg" alt="img02"><h4>Oxfords</h4></a></li>
						<li><a href="#"><img src="../../js/images/3.jpg" alt="img03"><h4>Loafers</h4></a></li>
						<li><a href="#"><img src="../../js/images/4.jpg" alt="img04"><h4>Sneakers</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="../../js/images/5.jpg" alt="img05"><h4>Belts</h4></a></li>
						<li><a href="#"><img src="../../js/images/6.jpg" alt="img06"><h4>Hats &amp; Caps</h4></a></li>
						<li><a href="#"><img src="../../js/images/7.jpg" alt="img07"><h4>Sunglasses</h4></a></li>
						<li><a href="#"><img src="../../js/images/8.jpg" alt="img08"><h4>Scarves</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="../../js/images/9.jpg" alt="img09"><h4>Casual</h4></a></li>
						<li><a href="#"><img src="../../js/images/10.jpg" alt="img10"><h4>Luxury</h4></a></li>
						<li><a href="#"><img src="../../js/images/11.jpg" alt="img11"><h4>Sport</h4></a></li>
					</ul>
					<ul>
						<li><a href="#"><img src="../../js/images/12.jpg" alt="img12"><h4>Carry-Ons</h4></a></li>
						<li><a href="#"><img src="../../js/images/13.jpg" alt="img13"><h4>Duffel Bags</h4></a></li>
						<li><a href="#"><img src="../../js/images/14.jpg" alt="img14"><h4>Laptop Bags</h4></a></li>
						<li><a href="#"><img src="../../js/images/15.jpg" alt="img15"><h4>Briefcases</h4></a></li>
					</ul>
					<nav>
						<a href="#">Shoes</a>
						<a href="#">Accessories</a>
						<a href="#">Watches</a>
						<a href="#">Bags</a>					</nav>
				</div>
			</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="../../js/js/jquery.catslider.js"></script>
		<script>
			$(function() {

				$( '#mi-slider' ).catslider();

			});
		</script>
    


