<?php
/* @var $this PedidoController */
/* @var $model Pedido */

$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->idpedido=>array('view','id'=>$model->idpedido),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedido', 'url'=>array('index')),
	array('label'=>'Create Pedido', 'url'=>array('create')),
	array('label'=>'View Pedido', 'url'=>array('view', 'id'=>$model->idpedido)),
	array('label'=>'Manage Pedido', 'url'=>array('admin')),
);
?>

<h1>Update Pedido <?php echo $model->idpedido; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>