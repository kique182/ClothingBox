<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */


?>
<div class="contenido">
	<div class="registro">
	    <div class="form">
	        <?php $form=$this->beginWidget('CActiveForm', array(
	        'id'=>'usuarios-form',
	        'enableClientValidation'=>false,
	        'enableAjaxValidation'=>true,
	        'clientOptions'=>array(
	                'validateOnSubmit'=>true,
	        ),
	        )); ?>

	        <h1>Modificar Usuario</h1>   
	        <div class="campos_llenar">
                <?php echo $form->textField($model,'nombre', array('class'=>'nombre', 'placeholder'=>'Ingrese su Nombre', 'disabled'=>'disabled')); ?>
                <?php echo $form->textField($model,'apellido' , array('class'=>'apellido', 'placeholder'=>'Ingrese su Apellido', 'disabled'=>'disabled')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->textField($model,'email' , array('class'=>'email', 'placeholder'=>'Ingrese su Email', 'disabled'=>'disabled')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->textField($model,'username' , array('class'=>'nombre', 'placeholder'=>'Ingrese su Usuario', 'disabled'=>'disabled'), array('size'=>20,'maxlength'=>20)); ?>
            </div>
            <?php echo CHtml::link('Atras', array('index'), array('id'=>'boton_lindo', 'class'=>'registrar')); ?>
            <?php echo CHtml::submitButton('Editar', array('id'=>'boton_lindo', 'class'=>'registrar')) ; ?>
	        <?php $this->endWidget(); ?>
	    </div>
	</div>
</div>