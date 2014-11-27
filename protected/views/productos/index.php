<?php
/* @var $this UsuariosController */
/* @var $dataProvider CActiveDataProvider */

?>
<div id="lista_menu">
	<h1>Productos</h1>
	<ul>
		<li>
			<?php echo CHtml::button('Crear Producto', array('class'=>'boton_peque', 'submit'=>array('productos/create'))) ; ?>
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
