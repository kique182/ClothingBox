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
        <?php echo CHtml::link(CHtml::encode('Comprar'), array('#', 'id'=>$data->idproducto), array('class'=>'boton_peque')); ?>
    </div>
</div>