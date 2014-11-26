<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproducto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproducto), array('view', 'id'=>$data->idproducto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Categoria_idcategoria')); ?>:</b>
	<?php echo CHtml::encode($data->Categoria_idcategoria); ?>
	<br />


</div>