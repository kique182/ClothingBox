<?php
/* @var $this FacturasController */
/* @var $data Facturas */
	$_SESSION['TOTAL'] = 0;
	$_SESSION['Cantidad_Productos'] = 0;
?>
<div class="factura_cliente">
<?php
foreach($data as $row)
{
	$_SESSION['TOTAL'] = ($row->cantidad*$row->productosIdProducto->precio) + $_SESSION['TOTAL'];
	$_SESSION['Cantidad_Productos'] = ($row->cantidad + $_SESSION['Cantidad_Productos']);
?>
	<div class="item">

		<b><?php echo CHtml::encode('Nombre producto'); ?>:</b>
		<?php echo CHtml::encode($row->productosIdProducto->nombre); ?>
		<br />

		<b><?php echo CHtml::encode('Precio unidad'); ?>:</b>
		<?php echo CHtml::encode($row->productosIdProducto->precio); ?>
		<br />

		<b><?php echo CHtml::encode('Cantidad'); ?>:</b>
		<?php echo CHtml::encode($row->cantidad); ?>
		<br />

		<b><?php echo CHtml::encode('Total'); ?>:</b>
		<?php echo CHtml::encode($row->cantidad*$row->productosIdProducto->precio); ?>
		<br />
	<div class="botones_item">           
        <?php echo CHtml::link(CHtml::encode('Eliminar'), array('delete', 'id'=>$row->id_factura),array('submit'=>array('delete', 'id'=>$row->id_factura), 'class'=>'boton_peque', 'confirm'=>'Seguro desea eliminar este Producto.?')); ?>
    </div>
</div>
<?php }
?>
	<div class="pie">
		<b><?php echo CHtml::encode('Total'); ?>:</b>
		<?php echo $_SESSION['TOTAL'];?>    
        <?php echo CHtml::link(CHtml::encode('Vaciar Carrito'), array('vaciar'),array('submit'=>array('vaciar'), 'class'=>'boton_peque', 'confirm'=>'Seguro desea vaciar el Carrito.?')); ?>
        <?php echo CHtml::link(CHtml::encode('Procesar Pago'), array('seleccionar_metodos'), array( 'class'=>'boton_peque'));?>
    </div>
</div>