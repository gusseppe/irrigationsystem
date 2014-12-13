<?php
/* @var $this ParcelaController */
/* @var $model Parcela */

$this->breadcrumbs=array(
	'Parcelas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Parcela', 'url'=>array('index')),
	array('label'=>'Manage Parcela', 'url'=>array('admin')),
);
?>

<h1>Create Parcela</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>