<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpedido'); ?>
		<?php echo $form->textField($model,'idpedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_pedido'); ?>
		<?php echo $form->textField($model,'numero_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuario_idusuario'); ?>
		<?php echo $form->textField($model,'Usuario_idusuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metodoenvio_idmetodoenvio'); ?>
		<?php echo $form->textField($model,'metodoenvio_idmetodoenvio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metodopago_idmetodopago'); ?>
		<?php echo $form->textField($model,'metodopago_idmetodopago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Bancos_id_banco'); ?>
		<?php echo $form->textField($model,'Bancos_id_banco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_trans'); ?>
		<?php echo $form->textField($model,'numero_trans'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->