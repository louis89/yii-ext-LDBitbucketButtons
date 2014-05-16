<?php 
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($assetsUrl.'/LDBitbucketButtons.css');
?>
<span class="<?php echo $buttonClass; ?>" id="<?php echo $id; ?>">
	<a class="bb-btn" id="<?php echo $id; ?>-btn" href="<?php echo $buttonUrl; ?>" target="_blank"> 
		<span class="bb-ico" id="<?php echo $id; ?>-ico"></span> 
		<span class="bb-text" id="<?php echo $id; ?>-text"><?php echo $text; ?></span>
	</a>
</span>