<?php
/* @var $this ParcelaController */
/* @var $data Parcela */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idParcela')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idParcela), array('view', 'id'=>$data->idParcela)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelHumedad')); ?>:</b>
	<?php echo CHtml::encode($data->nivelHumedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumo')); ?>:</b>
	<?php echo CHtml::encode($data->consumo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>