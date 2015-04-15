<?php
/* @var $this FacturasController */
/* @var $data Facturas */

?>
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
<div class="factura_cliente">
	<div class="item">
		<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
	            'id'=>'pedido-form',
	            'enableClientValidation'=>false,
	            'enableAjaxValidation'=>true,
	            'clientOptions'=>array(
	                    'validateOnSubmit'=>true,
	        ))); ?>

			<b><?php echo CHtml::encode('Total a Pagar'); ?>:</b>
			<?php echo CHtml::encode($_SESSION['TOTAL']); ?>
			<br />
			<br />
			<b><?php echo CHtml::encode('* Seleccione Método de Envio'); ?>:</b>
			<?php echo $form->dropDownList($model,'metodoenvio_idmetodoenvio', CHtml::listData(Metodoenvio::model()->findAll(), 'idmetodoenvio', 'nombre'), array('class'=>'rol', 'empty'=>'Seleccione Método de Envio'))?> 
			<br />
			<br />
			<b><?php echo CHtml::encode('* Seleccione Método de Pago'); ?>:</b>
			<?php echo $form->dropDownList($model,'metodopago_idmetodopago', 
						CHtml::listData(Metodopago::model()->findAll(), 'idmetodopago', 'nombre'), 
						array(
							'class'=>'rol', 
							'empty'=>'Seleccione Método de Pago',  
						))?> 
			<br />
			<br />
			<b><?php echo CHtml::encode('* Seleccione Banco donde Realizó la Transacción'); ?>:</b>
			<?php echo $form->dropDownList($model,'Bancos_id_banco', 
				CHtml::listData(Bancos::model()->findAll(), 'id_banco', 'nombre'), 
				array(
					'class'=>'rol', 
					'empty'=>'Seleccione Banco'
			))?>
			<br />
			<br />
			<div class="campos_llenar">
				<b><?php echo CHtml::encode('* Referencia N° / Deposito N°'); ?>:</b>
				<?php echo $form->textField($model,'numero_trans' , array('class'=>'numero', 'placeholder'=>'Ingrese N° Referencia/Deposito')); ?>
			</div>
			<div class="campos_llenar">
				<b><?php echo CHtml::encode('* Dirección de Envio'); ?>:</b>
				<?php echo $form->textField($model,'direccion' , array('class'=>'direccion_envio', 'placeholder'=>'Ingrese Dirección de Envio')); ?>
			</div>
			* Campos Obligatorios
			<br />
			<br />

			<?php 
			echo CHtml::submitButton('Confirmar Compra', array('id'=>'boton_lindo', 'class'=>'registrar')) ; ?>

			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>