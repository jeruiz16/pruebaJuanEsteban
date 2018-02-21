<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Adminsitrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Create Usuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>