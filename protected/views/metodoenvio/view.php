<?php
/* @var $this MetodoenvioController */
/* @var $model Metodoenvio */

$this->breadcrumbs=array(
	'Metodoenvios'=>array('index'),
	$model->idmetodoenvio,
);

$this->menu=array(
	array('label'=>'List Metodoenvio', 'url'=>array('index')),
	array('label'=>'Create Metodoenvio', 'url'=>array('create')),
	array('label'=>'Update Metodoenvio', 'url'=>array('update', 'id'=>$model->idmetodoenvio)),
	array('label'=>'Delete Metodoenvio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmetodoenvio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Metodoenvio', 'url'=>array('admin')),
);
?>

<h1>View Metodoenvio #<?php echo $model->idmetodoenvio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmetodoenvio',
		'nombre',
		'descripcion',
	),
)); ?>
