<?php
/* @var $this ParcelaController */
/* @var $model Parcela */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idParcela'); ?>
		<?php echo $form->textField($model,'idParcela'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivelHumedad'); ?>
		<?php echo $form->textField($model,'nivelHumedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumo'); ?>
		<?php echo $form->textField($model,'consumo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->