<script type="text/javascript">
	function wpNgWcloseMb(button){
		jQuery(button).parent().fadeOut(function(){
			jQuery(this).remove();
		});
	}
</script>
<div class="wpw-alert wpw-alert-danger">
	<img src="<?php echo $wpw_url;?>/img/close-light.png" class="wpw-close" alt="Close" onclick="wpNgWcloseMb(this)" />
  <p><strong>Error!</strong> <?php echo $error; ?></p>
</div>