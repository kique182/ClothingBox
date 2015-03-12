<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

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

<div id="lista_menu">
	<h1>Productos</h1>
</div> 
<?php
foreach($dataProvider as $row)
{
?>

<div id="usuario_uno">  
    <div class="foto">
        <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/fotos_productos/'.$row->foto,"foto",array("width"=>190, "height"=>150)), array('detalle_producto','id'=>$row->idproducto, 'tipo'=>$_GET['tipo'])); ?>
    </div>
    <div class="nombre">
        <h3>
            <?php echo CHtml::encode($row->nombre); ?>
        </h3>
    </div>  
    <div class="botones">            
        <?php echo CHtml::link(CHtml::encode('Ver Detalle'), array('detalle_producto', 'id'=>$row->idproducto, 'tipo'=>$_GET['tipo']), array('class'=>'boton_peque')); ?>
    </div>
</div>

<?php }?>

