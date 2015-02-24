<?php
/* @var $this MetodoenvioController */
/* @var $model Metodoenvio */

$this->breadcrumbs=array(
	'Metodoenvios'=>array('index'),
	$model->idmetodoenvio=>array('view','id'=>$model->idmetodoenvio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Metodoenvio', 'url'=>array('index')),
	array('label'=>'Create Metodoenvio', 'url'=>array('create')),
	array('label'=>'View Metodoenvio', 'url'=>array('view', 'id'=>$model->idmetodoenvio)),
	array('label'=>'Manage Metodoenvio', 'url'=>array('admin')),
);
?>

<h1>Update Metodoenvio <?php echo $model->idmetodoenvio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>