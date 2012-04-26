<?php
$this->breadcrumbs=array(
	'Items',
);

$this->menu=array(
	array('label'=>'Create items', 'url'=>array('create')),
	array('label'=>'Manage items', 'url'=>array('admin')),
);
?>

<h1>Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
