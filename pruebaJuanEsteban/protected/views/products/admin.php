<?php
/* @var $this ProductsController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Adminsitrar',
);

$this->menu=array(
	array('label'=>'Listar Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#products-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Adminsitrar Productos</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'proyectos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array('name' => 'id_product', 'header'=>'# Registro'),
		array('name' => 'idCategoria.name', 'header'=>'Categoria'),
		array('name' => 'name', 'header'=>'Nombre'),
		array('name' => 'created_at', 'header'=>'Fecha de Creacion'),
		array('name' => 'updated_at', 'header'=>'Fecha de Modificacion'),
		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
        )
	),
)); ?>
