<?php
/* @var $this CategoriasController */
/* @var $dataProvider CActiveDataProvider */
?>
<h1>Categorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'summaryText'=>'',
	'dataProvider'=>$dataProvider,
	'itemView'=>'/administrador/categorias',
)); ?>
