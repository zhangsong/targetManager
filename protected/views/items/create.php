<?php
$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List items', 'url'=>array('index')),
	array('label'=>'Manage items', 'url'=>array('admin')),
);
?>

<h1>创建条目</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>