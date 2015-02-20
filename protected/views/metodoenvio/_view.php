<?php
/* @var $this MetodoenvioController */
/* @var $data Metodoenvio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmetodoenvio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmetodoenvio), array('view', 'id'=>$data->idmetodoenvio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>