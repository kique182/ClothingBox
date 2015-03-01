<?php
/* @var $this MetodopagoController */
/* @var $model Metodopago */

$this->breadcrumbs=array(
	'Metodopagos'=>array('index'),
	$model->idmetodopago=>array('view','id'=>$model->idmetodopago),
	'Update',
);

$this->menu=array(
	array('label'=>'List Metodopago', 'url'=>array('index')),
	array('label'=>'Create Metodopago', 'url'=>array('create')),
	array('label'=>'View Metodopago', 'url'=>array('view', 'id'=>$model->idmetodopago)),
	array('label'=>'Manage Metodopago', 'url'=>array('admin')),
);
?>

<h1>Update Metodopago <?php echo $model->idmetodopago; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>