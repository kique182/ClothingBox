<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div id="usuario_uno">  
    <div class="foto">
            
    </div>
    <div class="nombre">
        <h3>
            <?php echo CHtml::encode($data->nombre); ?>
        </h3>
    </div>  
    <div class="botones">            
        <?php echo CHtml::link(CHtml::encode('Editar'), array('update', 'id'=>$data->idmetodopago), array('class'=>'boton_peque')); ?>
        <?php echo CHtml::link(CHtml::encode('Eliminar'), array('delete', 'id'=>$data->idmetodopago), array('class'=>'boton_peque', 'confirm'=>'Seguro desea eliminar este Usuario.?')); ?>
    </div>
</div>