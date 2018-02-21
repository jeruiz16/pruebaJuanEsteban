<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Listar Products', 'url'=>array('index')),
	array('label'=>'Crear Products', 'url'=>array('create')),
	array('label'=>'Actualizar Products', 'url'=>array('update', 'id'=>$model->id_product)),
	array('label'=>'Eliminar Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_product),'confirm'=>'Esta seguro de eliminar este producto?')),
	array('label'=>'Adminsitrar Products', 'url'=>array('admin')),
);
?>

<h1>View Products #<?php echo $model->id_product; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_product',
		'category_id',
		'name',
		'created_at',
		'updated_at',
	),
)); ?>
