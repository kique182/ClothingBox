<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedido-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_pedido'); ?>
		<?php echo $form->textField($model,'numero_pedido'); ?>
		<?php echo $form->error($model,'numero_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_idusuario'); ?>
		<?php echo $form->textField($model,'Usuario_idusuario'); ?>
		<?php echo $form->error($model,'Usuario_idusuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metodoenvio_idmetodoenvio'); ?>
		<?php echo $form->textField($model,'metodoenvio_idmetodoenvio'); ?>
		<?php echo $form->error($model,'metodoenvio_idmetodoenvio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metodopago_idmetodopago'); ?>
		<?php echo $form->textField($model,'metodopago_idmetodopago'); ?>
		<?php echo $form->error($model,'metodopago_idmetodopago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Bancos_id_banco'); ?>
		<?php echo $form->textField($model,'Bancos_id_banco'); ?>
		<?php echo $form->error($model,'Bancos_id_banco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_trans'); ?>
		<?php echo $form->textField($model,'numero_trans'); ?>
		<?php echo $form->error($model,'numero_trans'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->