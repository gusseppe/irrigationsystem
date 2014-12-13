<?php
/* @var $this ParcelaController */
/* @var $model Parcela */

$this->breadcrumbs=array(
	'Parcelas'=>array('index'),
	$model->idParcela,
);

$this->menu=array(
	array('label'=>'List Parcela', 'url'=>array('index')),
	array('label'=>'Create Parcela', 'url'=>array('create')),
	array('label'=>'Update Parcela', 'url'=>array('update', 'id'=>$model->idParcela)),
	array('label'=>'Delete Parcela', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idParcela),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Parcela', 'url'=>array('admin')),
);
?>

<h1>View Parcela #<?php echo $model->idParcela; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idParcela',
		'nivelHumedad',
		'lugar',
		'consumo',
		'estado',
	),
)); ?>
