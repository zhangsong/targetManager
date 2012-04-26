<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List items', 'url'=>array('index')),
	array('label'=>'Create items', 'url'=>array('create')),
	array('label'=>'View items', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage items', 'url'=>array('admin')),
);
?>

<h1>Update items <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>