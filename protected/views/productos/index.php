<?php
/* @var $this UsuariosController */
/* @var $dataProvider CActiveDataProvider */

?>
<div id="lista_menu">
	<h1>Productos</h1>
	<ul>
		<li>
			<?php echo CHtml::link(CHtml::encode('Crear Producto'), array('create'), array('class'=>'boton_peque')); ?>
		</li>
	</ul>
</div> 
<div id="caja_lista">
	<?php $this->widget('zii.widgets.CListView', array(
		'summaryText'=>'',
		'dataProvider'=>$dataProvider,
		'itemView'=>'/administrador/productos',
	)); ?>
</div>
