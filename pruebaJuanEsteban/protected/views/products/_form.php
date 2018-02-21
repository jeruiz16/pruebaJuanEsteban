<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'products-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $form->labelEx($model,'category_id'); ?>
			<?php echo $form->dropDownList($model,'category_id', CHtml::listData(Category::Model()->findAll(), 'id_category', 'name')); ?>
			<?php echo $form->error($model,'category_id'); ?>
		</div>	

	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>70)); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	</div>
	<div class="row-fluid">


		<div class="row-fluid buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', array('class' => 'btn btn-success')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->