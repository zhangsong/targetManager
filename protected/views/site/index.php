<?php $this->pageTitle=Yii::app()->name; ?>

<h1><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>欢迎使用本软件，期待大家的建议以及合作完善！</p>

<script type="text/javascript">
	$(function(){
		$('li:has(ul)')
			.click(function(event){
				if (this == event.target) {
					$(this).children().toggle();
				}
				return false;
			})
			.css('cursor', 'pointer')
			.click()
			.children().hide();
	});


</script>

<fieldset>
	<legend>蓝图</legend>
	<?php echo $showlist; ?>
</fieldset>