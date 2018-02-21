<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Amdinsitrar',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Usuarios</h1>



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
		array('name' => 'id_usuario', 'header'=>'# Registro'),
		array('name' => 'usuario', 'header'=>'Usuario'),
		array('name' => 'clave', 'header'=>'Clave'),
		array('name' => 'nombre', 'header'=>'Nombre'),
		array('name' => 'documento', 'header'=>'Documento'),
		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
        )
	),
)); ?>
