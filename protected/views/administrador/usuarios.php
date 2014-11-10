<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div id="usuario_uno">           
	<div class="nombre">
        <?php echo CHtml::encode($data->nombre); ?>
        <?php echo CHtml::encode($data->apellido); ?>
	</div>  
    <div class="check">
		<input type="checkbox" name="seleccion" value="1">
	</div>
    <div class="foto">
            
    </div>
    <div class="botones">            
        <?php echo CHtml::link(CHtml::encode('editar'), array('update', 'id'=>$data->id)); ?>
        <?php echo CHtml::link(CHtml::encode('eliminar'), array('delete', 'id'=>$data->id)); ?>
    </div>
</div>
