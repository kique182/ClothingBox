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
<div class="registro">
    <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'productos-form',
        'enableClientValidation'=>false,
        'enableAjaxValidation'=>true,
        'clientOptions'=>array(
                'validateOnSubmit'=>true,
        ),
        )); ?>

        <h1>Crear Producto</h1>   
        <div class="campos_llenar align="center" ">
        <?php 
            echo $form->dropDownList($model,'Categoria_idcategoria', CHtml::listData(Categorias::model()->findAll(), 'idcategoria', 'nombre'), array('class'=>'rol'));?>
        </div>
        <div class="campos_llenar">
            <?php echo $form->textField($model,'nombre', array('class'=>'nombre', 'placeholder'=>'Ingrese Nombre Producto')); ?>
        </div>
        <div class="campos_llenar">
            <?php echo $form->textField($model,'precio', array('class'=>'nombre', 'placeholder'=>'Ingrese Precio de Venta')); ?>
        </div>
        <div class="campos_llenar">
            <?php echo $form->textField($model,'descripcion' , array('class'=>'email', 'placeholder'=>'Ingrese descripcion del producto')); ?>
        </div>
        <?php echo CHtml::link('Atras', array('index'), array('id'=>'boton_lindo', 'class'=>'registrar')); ?>
        <?php echo CHtml::submitButton('Guardar', array('id'=>'boton_lindo', 'class'=>'registrar')) ; ?>
        <?php $this->endWidget(); ?>
    </div>
</div>