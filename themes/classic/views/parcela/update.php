<?php
/* @var $this ParcelaController */
/* @var $model Parcela */

$this->breadcrumbs=array(
	'Parcelas'=>array('index'),
	$model->idParcela=>array('view','id'=>$model->idParcela),
	'Update',
);

$this->menu=array(
	array('label'=>'List Parcela', 'url'=>array('index')),
	array('label'=>'Create Parcela', 'url'=>array('create')),
	array('label'=>'View Parcela', 'url'=>array('view', 'id'=>$model->idParcela)),
	array('label'=>'Manage Parcela', 'url'=>array('admin')),
);
?>

<h1>Update Parcela <?php echo $model->idParcela; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>