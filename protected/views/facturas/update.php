<?php
/* @var $this FacturasController */
/* @var $model Facturas */

$this->breadcrumbs=array(
	'Facturases'=>array('index'),
	$model->id_factura=>array('view','id'=>$model->id_factura),
	'Update',
);

$this->menu=array(
	array('label'=>'List Facturas', 'url'=>array('index')),
	array('label'=>'Create Facturas', 'url'=>array('create')),
	array('label'=>'View Facturas', 'url'=>array('view', 'id'=>$model->id_factura)),
	array('label'=>'Manage Facturas', 'url'=>array('admin')),
);
?>

<h1>Update Facturas <?php echo $model->id_factura; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>