<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id_category),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Categoria', 'url'=>array('index')),
	array('label'=>'Crear Categoria', 'url'=>array('create')),
	array('label'=>'Ver Categoria', 'url'=>array('view', 'id'=>$model->id_category)),
	array('label'=>'Adminsitrar Categoria', 'url'=>array('admin')),
);
?>

<h1>Update Category <?php echo $model->id_category; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>