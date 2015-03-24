<?php
/* @var $this FacturasController */
/* @var $data Facturas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_factura')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_factura), array('view', 'id'=>$data->id_factura)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuarios_username')); ?>:</b>
	<?php echo CHtml::encode($data->Usuarios_username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Productos_id_producto')); ?>:</b>
	<?php echo CHtml::encode($data->Productos_id_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />


</div>