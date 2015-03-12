<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="producto">
	<div class="foto">
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/fotos_usuarios/'.$data->foto,"foto",array("width"=>300, "height"=>200)); ?>
	</div>
	<div class="descripcion">
		<div class="nombre">
	        <h3>
	            <?php echo CHtml::encode($data->nombre); ?>
	        </h3>
	    </div>  
	    <div class="descripcion_producto">
			<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
			<?php echo CHtml::encode($data->nombre); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
			<?php echo CHtml::encode($data->apellido); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
			<?php echo CHtml::encode($data->cedula); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
			<?php echo CHtml::encode($data->telefono); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Sexo_idsexo')); ?>:</b>
			<?php echo CHtml::encode($data->sexoIdsexo->nombre); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
			<?php echo CHtml::encode($data->direccion); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
			<?php echo CHtml::encode($data->email); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
			<?php echo CHtml::encode($data->username); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
			*********
			<br />				
		</div>
	</div>
	<div class="botones">            
        <?php echo CHtml::link(CHtml::encode('Editar'), array('#', 'id'=>$data->idusuario), array('class'=>'boton_peque')); ?>
    </div>
</div>