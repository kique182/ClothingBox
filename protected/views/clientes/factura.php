<?php
/* @var $this FacturasController */
/* @var $data Facturas */
foreach($data as $row)
{
?>

<div class="view">

	<b><?php echo CHtml::encode('Nombre producto'); ?>:</b>
	<?php echo CHtml::encode($row->productosIdProducto->nombre); ?>
	<br />

	<b><?php echo CHtml::encode('Precio unidad'); ?>:</b>
	<?php echo CHtml::encode($row->productosIdProducto->precio); ?>
	<br />

	<b><?php echo CHtml::encode('cantidad'); ?>:</b>
	<?php echo CHtml::encode($row->cantidad); ?>
	<br />
	<br />

<div class="botones">           
        <?php echo CHtml::link(CHtml::encode('Eliminar'), array('delete', 'id'=>$row->id_factura),array('submit'=>array('delete', 'id'=>$row->id_factura), 'class'=>'boton_peque', 'confirm'=>'Seguro desea eliminar este Producto.?')); ?>
    </div>
</div>
<?php }
?>