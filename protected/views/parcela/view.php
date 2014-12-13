<?php
/* @var $this ParcelaController */
/* @var $model Parcela */

$this->breadcrumbs=array(
	'Parcelas'=>array('index'),
	$model->idParcela,
);

$this->menu=array(
	array('label'=>'Listar Parcela', 'url'=>array('index')),
	array('label'=>'CrearParcela', 'url'=>array('create')),
	array('label'=>'Actualizar Parcela', 'url'=>array('update', 'id'=>$model->idParcela)),
	array('label'=>'Borrar Parcela', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idParcela),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Configurar Parcela', 'url'=>array('admin')),
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
