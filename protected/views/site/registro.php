<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Registrarse';
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
    <div class="registro_afuera">
        <div class="form">
            <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'usuarios-form',
            'enableClientValidation'=>false,
            'enableAjaxValidation'=>true,
            'clientOptions'=>array(
                    'validateOnSubmit'=>true,
            ),
            )); ?>

            <h1>Registrarse</h1>
            <h3>Todos los Campos son Obligatorios</h3>
            <div class="campos_llenar">
                <?php echo $form->textField($model,'nombre', array('class'=>'nombre', 'placeholder'=>'Ingrese su Nombre')); ?>
                <?php echo $form->textField($model,'apellido' , array('class'=>'apellido', 'placeholder'=>'Ingrese su Apellido')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->textField($model,'cedula' , array('class'=>'nombre', 'placeholder'=>'Ingrese su Cédula'), array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->textField($model,'telefono' , array('class'=>'apellido', 'placeholder'=>'Ingrese su Teléfono'), array('size'=>20,'maxlength'=>20)); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->textField($model,'direccion' , array('class'=>'email', 'placeholder'=>'Ingrese su Dirección')); ?>
            </div>
            <div class="campos_llenar">
                <?php echo $form->dropDownList($model,'Sexo_idsexo', CHtml::listData(Sexos::model()->findAll(), 'id_sexo', 'nombre'), array('class'=>'rol', 'empty'=>'Seleccione Sexo'));?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model'=>$model,
                    'attribute'=>'fecha_nacimiento',
                    'value'=>$model->fecha_nacimiento,
                    'language' => 'es',
                    'htmlOptions' => array('readonly'=>"readonly", 'class'=>'fecha', 'placeholder'=>'Fecha de Nacimiento'),
                    'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$model->fecha_nacimiento,
                    'dateFormat'=>'yy-mm-dd',
                    'selectOtherMonths'=>true,
                    'showAnim'=>'slide',
                    'showButtonPanel'=>true, 
                    'showOtherMonths'=>true, 
                    'changeMonth' => 'true', 
                    'changeYear' => 'true', 
                    'minDate'=>'date("Y-m-d")', 
                    'maxDate'=> "+0Y",
                    'minDate' => '-100Y',
                    ),
                    )); 
                ?> 
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
            <?php echo CHtml::link('Atras', array('site/login'), array('id'=>'boton_lindo', 'class'=>'registrar')); ?>
            <?php echo CHtml::submitButton('Registrar', array('id'=>'boton_lindo', 'class'=>'registrar')) ; ?>
            <?php $this->endWidget(); ?>
        </div>
    </div>
