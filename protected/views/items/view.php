<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List items', 'url'=>array('index')),
	array('label'=>'Create items', 'url'=>array('create')),
	array('label'=>'Update items', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete items', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage items', 'url'=>array('admin')),
);
?>

<h1>View items #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'type',
		'ctime:datetime',
		array(
			'name'=>'ctime',
			'value'=>date("Y-m-d H:i:s", $model->ctime),
		),
		'remark',
		'fid',
	),
)); ?>
