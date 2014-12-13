<?php
/* @var $this ProgramacionController */
/* @var $model Programacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'programacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idParcela'); ?>
		<?php echo $form->textField($model,'idParcela'); ?>
		<?php echo $form->error($model,'idParcela'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horario'); ?>
		<?php echo $form->textField($model,'horario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'horario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelHumedad'); ?>
		<?php echo $form->textField($model,'nivelHumedad'); ?>
		<?php echo $form->error($model,'nivelHumedad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->