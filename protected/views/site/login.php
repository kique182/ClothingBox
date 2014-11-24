<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Iniciar Sesión';
?>
<div class="contenido">
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
            <div class="campos_llenar">
                <?php echo $form->textField($model,'username', array('class'=>'usuario', 'placeholder'=>'Ingrese su Email')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->passwordField($model,'password' , array('class'=>'usuario', 'placeholder'=>'Ingrese su Contraseña')); ?>
            </div>                
            <div class="botones">
                <?php echo CHtml::link('Registrar', array('site/registro'), array('id'=>'boton_lindo', 'class'=>'iniciar')); ?>
                <?php echo CHtml::submitButton('Ingresar', array('id'=>'boton_lindo', 'class'=>'iniciar')) ; ?>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
