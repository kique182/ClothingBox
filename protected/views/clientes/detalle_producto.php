<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="producto">
	<div class="foto">
		
	</div>
	<div class="descripcion">
		<div class="nombre">
	        <h3>
	            <?php echo CHtml::encode($data->nombre); ?>
	        </h3>
	    </div>  
	    <div class="descripcion_producto">
			<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
			<?php echo CHtml::encode($data->descripcion); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
			<?php echo CHtml::encode($data->precio); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Categoria_idcategoria')); ?>:</b>
			<?php echo CHtml::encode($data->categoriaIdcategoria->nombre); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Inventarios_idInventario')); ?>:</b>
			<?php echo CHtml::encode($data->inventariosIdInventario->cantidad); ?>
			<br />
		</div>
	</div>
	<div class="botones">            
        <?php echo CHtml::link(CHtml::encode('Agregar al Carrito'), array('#', 'id'=>$data->idproducto), array('class'=>'boton_peque')); ?>
    </div>
</div>
