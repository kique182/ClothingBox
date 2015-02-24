<?php
/* @var $this MetodoenvioController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Create Metodoenvio', 'url'=>array('create')),
	array('label'=>'Manage Metodoenvio', 'url'=>array('admin')),
);
?>

<h1>Metodo de Envios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
