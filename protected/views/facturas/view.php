<?php
/* @var $this FacturasController */
/* @var $model Facturas */

$this->breadcrumbs=array(
	'Facturases'=>array('index'),
	$model->id_factura,
);

$this->menu=array(
	array('label'=>'List Facturas', 'url'=>array('index')),
	array('label'=>'Create Facturas', 'url'=>array('create')),
	array('label'=>'Update Facturas', 'url'=>array('update', 'id'=>$model->id_factura)),
	array('label'=>'Delete Facturas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_factura),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Facturas', 'url'=>array('admin')),
);
?>

<h1>View Facturas #<?php echo $model->id_factura; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_factura',
		'Usuarios_username',
		'Productos_id_producto',
		'cantidad',
	),
)); ?>
