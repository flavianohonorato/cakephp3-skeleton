
<div class="alert alert-danger alert-hover text-center" id="flash_success">
    <button class="close"><i class="fa fa-times fa-lg"></i></button>
    <i class="fa fa-exclamation-triangle"></i> <?= h($message); ?>
</div>

<script type="text/javascript">
	$('#flash_success').addClass('animated fadeInDown');
	$( ".close" ).click(function() {
	    jQuery('#flash_success').removeClass('fadeInDown');
	    jQuery('#flash_success').addClass('fadeOutUp');
	});
</script>
