<?php
/* @var $this CategoriasController */
/* @var $dataProvider CActiveDataProvider */
?>
<h1>Categorias</h1>
<div id="lista_menu">
	<ul>
		<li>
			<?php echo CHtml::link(CHtml::encode('Crear Categoría'), array('create'), array('class'=>'boton_peque')); ?>
		</li>
	</ul>
</div>
<div id="caja_lista">

<?php $this->widget('zii.widgets.CListView', array(
	'summaryText'=>'',
	'dataProvider'=>$dataProvider,
	'itemView'=>'/administrador/categorias',
)); ?>
</div>