<?php
/* @var $this UsuariosController */
/* @var $dataProvider CActiveDataProvider */

?>
<div id="lista_menu">
	<h1>Productos</h1>
</div> 
<div id="caja_lista">
	<?php $this->widget('zii.widgets.CListView', array(
		'summaryText'=>'',
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view_productos',
	)); ?>
</div>
