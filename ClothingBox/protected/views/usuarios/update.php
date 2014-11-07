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

	        <h1>Crear Usuario</h1>   
	        <?php echo $form->textField($model,'nombre', array('class'=>'nombre', 'placeholder'=>'Ingrese su Nombre')); ?>
	        <?php echo $form->textField($model,'apellido' , array('class'=>'apellido', 'placeholder'=>'Ingrese su Apellido')); ?>
	        <?php echo $form->textField($model,'email' , array('class'=>'email', 'placeholder'=>'Ingrese su Email')); ?>
	        <?php echo $form->textField($model,'username' , array('class'=>'nombre', 'placeholder'=>'Ingrese su Usuario')); ?>
	        <?php echo $form->passwordField($model,'password' , array('class'=>'email', 'placeholder'=>'Ingrese su Contraseña')); ?>
	        <?php echo $form->passwordField($model,'repetirpassword' , array('class'=>'email', 'placeholder'=>'Repita su Contraseña')); ?>
	        <?php echo CHtml::button('Atras', array('class'=>'boton2', 'submit'=>array('site/login'))) ; ?>
	        <?php echo CHtml::submitButton('Registrar', array('class'=>'boton2')) ; ?>
	        <?php $this->endWidget(); ?>
	    </div>
	</div>
</div>