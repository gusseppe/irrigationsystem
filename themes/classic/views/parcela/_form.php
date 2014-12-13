<?php
/* @var $this ParcelaController */
/* @var $model Parcela */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parcela-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nivelHumedad'); ?>
		<?php echo $form->textField($model,'nivelHumedad'); ?>
		<?php echo $form->error($model,'nivelHumedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consumo'); ?>
		<?php echo $form->textField($model,'consumo'); ?>
		<?php echo $form->error($model,'consumo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->