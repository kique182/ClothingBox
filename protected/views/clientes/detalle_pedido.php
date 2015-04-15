<?php
/* @var $this FacturasController */
/* @var $data Facturas */
	$_SESSION['TOTAL'] = 0;
?>
<div class="factura_cliente">
<?php
foreach($data as $row)
{
	$_SESSION['TOTAL'] = ($row->cantidad_producto*$row->Precio_Compra) + $_SESSION['TOTAL'];
?>
	<div class="item">

		<b><?php echo CHtml::encode('Nombre producto'); ?>:</b>
		<?php echo CHtml::encode($row->productoIdproducto->nombre); ?>
		<br />

		<b><?php echo CHtml::encode('Precio unidad'); ?>:</b>
		<?php echo CHtml::encode($row->Precio_Compra); ?>
		<br />

		<b><?php echo CHtml::encode('Cantidad'); ?>:</b>
		<?php echo CHtml::encode($row->cantidad_producto); ?>
		<br />

		<b><?php echo CHtml::encode('Total'); ?>:</b>
		<?php echo CHtml::encode($row->cantidad_producto*$row->Precio_Compra); ?>
		<br />
</div>
<?php }
?>
	<div class="pie">
		<b><?php echo CHtml::encode('Total'); ?>:</b>
		<?php echo $_SESSION['TOTAL'];?>   
    </div>
</div>