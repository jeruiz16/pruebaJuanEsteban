<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
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
			<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usuario'); ?>
		</div>	

	</div>
	<div class="row-fluid">
		<div class="span6">
			<?php echo $form->labelEx($model,'clave'); ?>
		<?php echo $form->textField($model,'clave',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'clave'); ?>
		</div>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row-fluid">
		<div class="span6">
		<?php echo $form->labelEx($model,'documento'); ?>
		<?php echo $form->textField($model,'documento'); ?>
		<?php echo $form->error($model,'documento'); ?>
		</div>
	</div>
	<div class="row-fluid">


		<div class="row-fluid buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', array('class' => 'btn btn-success')); ?>
		</div>
	</div>

	
	

<?php $this->endWidget(); ?>

</div><!-- form -->