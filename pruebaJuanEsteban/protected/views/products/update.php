<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name=>array('view','id'=>$model->id_product),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Products', 'url'=>array('index')),
	array('label'=>'Crear Products', 'url'=>array('create')),
	array('label'=>'Ver Products', 'url'=>array('view', 'id'=>$model->id_product)),
	array('label'=>'Administrar Products', 'url'=>array('admin')),
);
?>

<h1>Update Products <?php echo $model->id_product; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>