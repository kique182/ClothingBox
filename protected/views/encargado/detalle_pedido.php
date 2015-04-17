<?php
/* @var $this FacturasController */
/* @var $data Facturas */
	$_SESSION['TOTAL'] = 0;
?>
<div class="factura_cliente">

	<div class='info' style='text-align:center;'>
    <?php
        $flashMessages = Yii::app()->user->getFlashes();
        if($flashMessages)
        {
            echo '<ul class="flashes">';
            foreach ($flashMessages as $key => $message)
            {
                echo '<li><div class="flash-' . $key . '">' . $message . "</div></li>";
            }
            echo '</ul>';                
        }
    ?>
</div>
	<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'pedido-form',
        'enableClientValidation'=>false,
        'enableAjaxValidation'=>true,
        'clientOptions'=>array(
                'validateOnSubmit'=>true,
        ),
        )); ?>

     <?php echo $form->hiddenField($model, 'idpedido');?>
	<b><?php echo CHtml::encode('Status del Pedido'); ?>:</b>
<?php echo $form->dropDownList($model,'status', CHtml::listData(Status::model()->findAll(), 'id_status', 'nombre'), array('class'=>'rol'));
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
		<br />
		<b><?php echo CHtml::encode('Banco'); ?>:</b>
		<?php echo CHtml::encode($row->pedidoIdpedido->bancosIdBanco->nombre); ?>
		<br />
		<b><?php echo CHtml::encode('Código Transacción'); ?>:</b>
		<?php echo CHtml::encode($row->pedidoIdpedido->numero_trans); ?>
		<?php echo CHtml::link(CHtml::encode('Guardar Cambios'), array('guardar'),array('submit'=>array('guardar'), 'class'=>'boton_peque')); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>