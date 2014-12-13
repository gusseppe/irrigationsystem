<?php
/* @var $this ParcelaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parcelas',
);

$this->menu=array(
	array('label'=>'Create Parcela', 'url'=>array('create')),
	array('label'=>'Manage Parcela', 'url'=>array('admin')),
);
?>

<h1>Parcelas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
