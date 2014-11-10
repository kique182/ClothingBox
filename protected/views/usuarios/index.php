<?php
/* @var $this UsuariosController */
/* @var $dataProvider CActiveDataProvider */

?>
<div class="contenido">
	<div id="lista_menu">
		<ul>
			<li>
				<?php echo CHtml::button('Crear', array('class'=>'boton2', 'submit'=>array('usuarios/create'))) ; ?>
			</li>
            <li>
                <a href="">Eliminar</a>
            </li>
		</ul>
	</div> 
    <div id="caja_lista">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'/administrador/usuarios',
		)); ?>
	</div>
</div>
