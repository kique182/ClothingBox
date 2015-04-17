<div class="producto">
	<div class="foto">
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/fotos_productos/'.$data->foto,"foto",array("width"=>300, "height"=>200)); ?>
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

			<b><?php echo CHtml::encode('Disponibilidad'); ?>:</b>
			<?php echo CHtml::encode($data->cantidad).' Unidades'; ?>
			<br />
			<b><?php echo CHtml::encode($data->getAttributeLabel('Categoria_idcategoria')); ?>:</b>
			<?php echo CHtml::encode($data->categoriaIdcategoria->nombre); ?>
			<br />
		</div>
	</div>
</div>