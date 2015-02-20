<?php
/* @var $this UsuariosController */
/* @var $dataProvider CActiveDataProvider */

?>
<div id="lista_menu">
	<h1>Usuarios</h1>
	<ul>
		<li>
			<?php echo CHtml::button('Crear Usuario', array('class'=>'boton_peque', 'submit'=>array('usuarios/create'))) ; ?>
		</li>
	</ul>
</div> 
<div id="caja_lista">
	<?php $this->widget('zii.widgets.CListView', array(
		'summaryText'=>'',
		'dataProvider'=>$dataProvider,
		'itemView'=>'/administrador/usuarios',
	)); ?>
</div>

