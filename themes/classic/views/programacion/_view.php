<?php
/* @var $this ProgramacionController */
/* @var $data Programacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProgramacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProgramacion), array('view', 'id'=>$data->idProgramacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idParcela')); ?>:</b>
	<?php echo CHtml::encode($data->idParcela); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horario')); ?>:</b>
	<?php echo CHtml::encode($data->horario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelHumedad')); ?>:</b>
	<?php echo CHtml::encode($data->nivelHumedad); ?>
	<br />


</div>