<?php
/* @var $this MetodoenvioController */
/* @var $dataProvider CActiveDataProvider */

?>
<div id="lista_menu">
	<h1>Métodos de Envios</h1>
	<ul>
		<li>
			<?php echo CHtml::button('Crear Método de Envio', array('class'=>'boton_peque', 'submit'=>array('usuarios/create'))) ; ?>
		</li>
	</ul>
</div> 

<?php $this->widget('zii.widgets.CListView', array(
	'summaryText'=>'',
	'dataProvider'=>$dataProvider,
	'itemView'=>'/administrador/metodo_envio',
)); ?>
