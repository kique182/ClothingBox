<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	$model->idcategoria=>array('view','id'=>$model->idcategoria),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categorias', 'url'=>array('index')),
	array('label'=>'Create Categorias', 'url'=>array('create')),
	array('label'=>'View Categorias', 'url'=>array('view', 'id'=>$model->idcategoria)),
	array('label'=>'Manage Categorias', 'url'=>array('admin')),
);
?>

<h1>Update Categorias <?php echo $model->idcategoria; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>