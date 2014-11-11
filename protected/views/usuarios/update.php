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
                <?php echo $form->textField($model,'nombre', array('class'=>'nombre', 'placeholder'=>'Ingrese su Nombre')); ?>
                <?php echo $form->textField($model,'apellido' , array('class'=>'apellido', 'placeholder'=>'Ingrese su Apellido')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->textField($model,'email' , array('class'=>'email', 'placeholder'=>'Ingrese su Email')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->textField($model,'username' , array('class'=>'nombre', 'placeholder'=>'Ingrese su Usuario'), array('size'=>20,'maxlength'=>20)); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->passwordField($model,'password' , array('class'=>'email', 'placeholder'=>'Ingrese su Contraseña')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->passwordField($model,'repetirpassword' , array('class'=>'email', 'placeholder'=>'Repita su Contraseña')); ?>
            </div>
            <?php echo CHtml::link('Atras', array('index'), array('id'=>'boton_lindo', 'class'=>'registrar')); ?>
            <?php echo CHtml::submitButton('Editar', array('id'=>'boton_lindo', 'class'=>'registrar')) ; ?>
	        <?php $this->endWidget(); ?>
	    </div>
	</div>
</div>