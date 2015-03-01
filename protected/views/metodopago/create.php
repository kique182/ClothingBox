<?php
/* @var $this MetodopagoController */
/* @var $model Metodopago */

$this->breadcrumbs=array(
	'Metodopagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Metodopago', 'url'=>array('index')),
	array('label'=>'Manage Metodopago', 'url'=>array('admin')),
);
?>

<h1>Create Metodopago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>