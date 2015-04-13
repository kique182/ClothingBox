<?php
/* @var $this FacturasController */
/* @var $data Facturas */

?>

<div class="factura_cliente">
	<div class="item">

		<?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'pedido-form',)); ?>

		<b><?php echo CHtml::encode('Total a Pagar'); ?>:</b>
		<?php echo CHtml::encode($_SESSION['TOTAL']); ?>
		<br />
		<br />
		<b><?php echo CHtml::encode('Seleccione Método de Envio '); ?>:</b>
		<?php echo $form->dropDownList($model,'metodoenvio_idmetodoenvio', CHtml::listData(Metodoenvio::model()->findAll(), 'idmetodoenvio', 'nombre'), array('class'=>'rol', 'empty'=>'Seleccione Método de Envio'))?> 
		<br />
		<br />
		<b><?php echo CHtml::encode('Seleccione Método de Pago '); ?>:</b>
		<?php echo $form->dropDownList($model,'metodopagoIdmetodopago', CHtml::listData(Metodopago::model()->findAll(), 'idmetodopago', 'nombre'), array('class'=>'rol', 'empty'=>'Seleccione Método de Pago'))?> 
		<br />
		<br />
		<?php 
		?>
		<?php $this->endWidget(); ?>
	</div>
</div>