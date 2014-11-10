<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Iniciar Sesión';
?>
<div class="contenido">
    <div class="sesion">
        <div class="form">
            <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                    'validateOnSubmit'=>true,
            ),
            )); ?>

            <h1>Iniciar Sesión</h1>
            <?php echo $form->textField($model,'username', array('class'=>'usuario', 'placeholder'=>'Ingrese su Email')); ?>
            <?php echo $form->passwordField($model,'password' , array('class'=>'usuario', 'placeholder'=>'Ingrese su Contraseña')); ?>    
            <?php echo CHtml::button('Registrar', array('class'=>'boton', 'submit'=>array('site/registro'))) ; ?>
            <?php echo CHtml::submitButton('Ingresar', array('class'=>'boton')) ; ?>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
