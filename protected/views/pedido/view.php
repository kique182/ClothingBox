<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->idpedido,
);

$this->menu=array(
	array('label'=>'List Pedido', 'url'=>array('index')),
	array('label'=>'Create Pedido', 'url'=>array('create')),
	array('label'=>'Update Pedido', 'url'=>array('update', 'id'=>$model->idpedido)),
	array('label'=>'Delete Pedido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpedido),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedido', 'url'=>array('admin')),
);
?>

<h1>View Pedido #<?php echo $model->idpedido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpedido',
		'numero_pedido',
		'fecha',
		'cantidad',
		'direccion',
		'status',
		'Usuario_idusuario',
		'metodoenvio_idmetodoenvio',
		'metodopago_idmetodopago',
		'Bancos_id_banco',
		'numero_trans',
	),
)); ?>
