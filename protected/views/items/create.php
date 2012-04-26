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

<h1>Create items</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>