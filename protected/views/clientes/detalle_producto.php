<?php
/* @var $this ProductosController */
/* @var $data Productos */
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
<div class="producto">
	<?php 
		$form=$this->beginWidget('CActiveForm', array(
		'id'=>'facturas-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
                'validateOnSubmit'=>true,),
	)); ?>
	<div class="foto">
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/fotos_productos/'.$data->foto,"foto",array("width"=>300, "height"=>200)); ?>
	</div>
	<div class="descripcion">
		
		<div class="nombre">
	        <h3>
	            <?php echo CHtml::encode($data->nombre); ?>
	        </h3>
	    </div>  
	    <div class="descripcion_producto">
			<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
			<?php echo CHtml::encode($data->descripcion); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
			<?php echo CHtml::encode($data->precio); ?>
			<br />
			<b><?php echo CHtml::encode($data->getAttributeLabel('Categoria_idcategoria')); ?>:</b>
			<?php echo CHtml::encode($data->categoriaIdcategoria->nombre); ?>
			<br />
			<?php echo $form->hiddenField($model_factura,'Usuarios_username', array('value'=>Yii::app()->user->id)); ?>
			<?php echo $form->hiddenField($model_factura,'Productos_id_producto', array('value'=>CHtml::encode($data->idproducto))); ?>
			<b>Cantidad: </b>
			<?php echo $form->textField($model_factura,'cantidad',array('size'=>1)); ?>
		</div>
	</div>
	<div class="botones">            
        <?php echo CHtml::submitButton('Agregar a Carrito', array('id'=>'boton_lindo')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>

<div id="lista_menu">
	<h1>Productos</h1>
</div> 
<?php
foreach($dataProvider as $row)
{
?>

<div id="usuario_uno">  
    <div class="foto">
        <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/fotos_productos/'.$row->foto,"foto",array("width"=>190, "height"=>150)), array('detalle_producto','id'=>$row->idproducto, 'tipo'=>$_GET['tipo'])); ?>
    </div>
    <div class="nombre">
        <h3>
            <?php echo CHtml::encode($row->nombre); ?>
        </h3>
    </div>  
    <div class="botones">            
        <?php echo CHtml::link(CHtml::encode('Ver Detalle'), array('detalle_producto', 'id'=>$row->idproducto, 'tipo'=>$_GET['tipo']), array('class'=>'boton_peque')); ?>
    </div>
</div>

<?php }?>

