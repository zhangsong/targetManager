<?php $this->pageTitle=Yii::app()->name; ?>

<h1><i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>欢迎使用本软件，期待大家的建议以及合作完善！</p>
<style type="text/css">
*{padding:0; margin:0;}
ul,li{list-style:none;}
li {background:none; border:0;}

.hasul_def { border:1px solid #98b4ce; line-height:24px; color:#215791;background: url(01.jpg) #f6f9fb no-repeat 250px center;}
.hasnotul_def { border:1px solid #98b4ce; line-height:24px; color:#215791;background: url(01.jpg) #f6f9fb no-repeat 250px center;}
.hasul_over {background: url(02.jpg) #135999 no-repeat 245px center; color:#fff;}

.hasul_open {}

.default_ul {}

.li_over {color:#CC3300; background:#fff;}

</style>
<script type="text/javascript">
	$(function(){
		$('li:has(ul)')
			.click(function(event){
				if (this == event.target) {
					$(this).children().toggle();
					//$(this).toggleClass('');
				}
				return false;
			})
			.css('cursor', 'pointer')
			.click()
			.children()
			.hide()
			.addClass('hasul_def')
			.hover(function(event){
				if (this == event.target) {
					$(this).addClass('hasul_over');
					return false;
					//$(this).toggleClass('');
				}
			
				
			//	alert('d');
			}, function(event){
				if (this == event.target) {
					$(this).removeClass('hasul_over');
					return false;
					//$(this).toggleClass('');
				}
			})
			;
		$('li:not(:has(ul))')
			.hover(function(){
				$(this).addClass('li_over');
				//alert('d');
			}, function(){
				$(this).removeClass('li_over');
			})
			.addClass('hasnotul_def')
			;
	});


</script>

<fieldset>
	<legend>蓝图</legend>
	<?php echo $showlist; ?>
</fieldset>