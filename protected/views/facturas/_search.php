<?php
/* @var $this FacturasController */
/* @var $model Facturas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_factura'); ?>
		<?php echo $form->textField($model,'id_factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuarios_username'); ?>
		<?php echo $form->textField($model,'Usuarios_username',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Productos_id_producto'); ?>
		<?php echo $form->textField($model,'Productos_id_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->