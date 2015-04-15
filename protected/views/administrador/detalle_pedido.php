<?php
/* @var $this FacturasController */
/* @var $data Facturas */
	$_SESSION['TOTAL'] = 0;
	$select = null;
?>
<div class="factura_cliente">
	<b><?php echo CHtml::encode('Status del Pedido'); ?>:</b>
<?php
	echo CHtml::dropDownList('Status', $select, 
              array('en espera' => 'En Espera', 'en camino' => 'En Camino', 'entregado'=>'Entregado'),
              array('class'=>'rol', 'empty' => 'Seleccione Status del Pedido')
              );
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