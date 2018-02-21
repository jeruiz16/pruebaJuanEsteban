<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Products', 'url'=>array('index')),
	array('label'=>'Adminsitrar Products', 'url'=>array('admin')),
);
?>

<h1>Create Products</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>