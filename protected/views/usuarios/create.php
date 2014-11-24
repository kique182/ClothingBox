<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

/*foreach (Yii::app()->user->getFlashes() as $key => $message)
    {
        echo 'div class="flash-' . $key . '">' . $message . "</div>";
    }
*/
    /*if(Yii::app()->user->hasFlash('success')):?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
    <?php endif;*/
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
	<div class="modificar_crear">
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
            <div class="campos_llenar align="center" ">
            <?php 
                echo $form->dropDownList($model,'Rol_idrol', CHtml::listData(Rol::model()->findAll(), 'idrol', 'nombre'), array('class'=>'rol'));?>
            </div>
	        <div class="campos_llenar">
                <?php echo $form->textField($model,'nombre', array('class'=>'nombre', 'placeholder'=>'Ingrese su Nombre')); ?>
                <?php echo $form->textField($model,'apellido' , array('class'=>'apellido', 'placeholder'=>'Ingrese su Apellido')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->textField($model,'email' , array('class'=>'email', 'placeholder'=>'Ingrese su Email')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->textField($model,'username' , array('class'=>'nombre', 'placeholder'=>'Ingrese su Usuario'), array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->textField($model,'telefono' , array('class'=>'apellido', 'placeholder'=>'Ingrese su Teléfono'), array('size'=>20,'maxlength'=>20)); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->passwordField($model,'password' , array('class'=>'email', 'placeholder'=>'Ingrese su Contraseña')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->passwordField($model,'repetirpassword' , array('class'=>'email', 'placeholder'=>'Repita su Contraseña')); ?>
            </div>
            <?php echo CHtml::link('Atras', array('index'), array('id'=>'boton_lindo', 'class'=>'registrar')); ?>
            <?php echo CHtml::submitButton('Guardar', array('id'=>'boton_lindo', 'class'=>'registrar')) ; ?>
	        <?php $this->endWidget(); ?>
	    </div>
	</div>
</div>