<?php
/* @var $this ProgramacionController */
/* @var $model Programacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idProgramacion'); ?>
		<?php echo $form->textField($model,'idProgramacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idParcela'); ?>
		<?php echo $form->textField($model,'idParcela'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horario'); ?>
		<?php echo $form->textField($model,'horario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelHumedad'); ?>
		<?php echo $form->textField($model,'nivelHumedad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->