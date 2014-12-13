<?php
/* @var $this ProgramacionController */
/* @var $model Programacion */

$this->breadcrumbs=array(
	'Programacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Programacion', 'url'=>array('index')),
	array('label'=>'Manage Programacion', 'url'=>array('admin')),
);
?>

<h1>Create Programacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>