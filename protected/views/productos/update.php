<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
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
<div class="modificar_crear">
    <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'productos-form',
        'enableClientValidation'=>false,
        'enableAjaxValidation'=>true,
        'clientOptions'=>array(
                'validateOnSubmit'=>true,
        ),
        )); ?>

        <h1>Modificar Productos</h1>   
        <div class="campos_llenar" align="center"s>
        <?php 
            echo $form->dropDownList($model,'Categoria_idcategoria', CHtml::listData(Categorias::model()->findAll(), 'idcategoria', 'nombre'), array('class'=>'rol'));?>
        </div>
        <div class="campos_update">
            <div class="texto"><h4>Nombre Producto</h4></div>
            <div class="campo"><?php echo $form->textField($model,'nombre', array('class'=>'nombre', 'placeholder'=>'Ingrese Nombre Producto')); ?></div> 
        </div>
        <div class="campos_update">
            <div class="texto"><h4>Precio</h4></div>
            <div class="campo"><?php echo $form->textField($model,'precio', array('class'=>'nombre', 'placeholder'=>'Ingrese Precio de Venta')); ?></div> 
        </div>
        <div class="campos_update">
            <div class="texto"><h4>Cantidad</h4></div>
            <div class="campo"><?php echo $form->textField($model,'cantidad', array('class'=>'nombre', 'placeholder'=>'Ingrese Precio de Venta')); ?></div> 
        </div>
        <div class="campos_update">
            <div class="texto"><h4>Descripción</h4></div>
            <div class="campo"><?php echo $form->textField($model,'descripcion' , array('class'=>'email', 'placeholder'=>'Ingrese descripcion del producto')); ?></div> 
        </div>
        <?php echo CHtml::link('Atras', array('index'), array('id'=>'boton_lindo', 'class'=>'registrar')); ?>
        <?php echo CHtml::submitButton('Guardar', array('id'=>'boton_lindo', 'class'=>'registrar')) ; ?>
        <?php $this->endWidget(); ?>
    </div>
</div>
