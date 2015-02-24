<?php
/* @var $this MetodoenvioController */
/* @var $model Metodoenvio */

$this->breadcrumbs=array(
	'Metodoenvios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Metodoenvio', 'url'=>array('index')),
	array('label'=>'Manage Metodoenvio', 'url'=>array('admin')),
);
?>

<h1>Create Metodoenvio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>