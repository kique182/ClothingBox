<?php
/* @var $this PedidoController */
/* @var $data Pedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpedido')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpedido), array('view', 'id'=>$data->idpedido)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->numero_pedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idusuario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('metodoenvio_idmetodoenvio')); ?>:</b>
	<?php echo CHtml::encode($data->metodoenvio_idmetodoenvio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metodopago_idmetodopago')); ?>:</b>
	<?php echo CHtml::encode($data->metodopago_idmetodopago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Bancos_id_banco')); ?>:</b>
	<?php echo CHtml::encode($data->Bancos_id_banco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_trans')); ?>:</b>
	<?php echo CHtml::encode($data->numero_trans); ?>
	<br />

	*/ ?>

</div>