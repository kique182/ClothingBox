<?php
/* @var $this FacturasController */
/* @var $data Facturas */
?>
<div class="factura_cliente">
<?php
foreach($data as $row)
{
?>
	<div class="item">

		<b><?php echo CHtml::encode('Numero Pedido'); ?>:</b>
		<?php echo CHtml::encode($row->idpedido); ?>
		<br />

		<b><?php echo CHtml::encode('Fecha Pedido'); ?>:</b>
		<?php echo CHtml::encode($row->fecha); ?>
		<br />

		<b><?php echo CHtml::encode('Estado del Pedido'); ?>:</b>
		<?php echo CHtml::encode($row->status0->nombre); ?>
		<br />

		<div class="botones_item">           
	        <?php echo CHtml::link(CHtml::encode('Ver Detalle'), array('detalle_pedido', 'id'=>$row->idpedido),array('class'=>'boton_peque')); ?>
	    </div>
	</div>
<?php }
?>
</div>