<?php
queue_js_file('guest-user-password');
queue_css_file('skeleton');
$css = "form > div { clear: both; padding-top: 10px;} .two.columns {width: 30%;} ";
queue_css_string($css);
$pageTitle = get_option('guest_user_register_text') ? get_option('guest_user_register_text') : __('Register');
echo head(array('bodyclass' => 'register', 'title' => $pageTitle));
?>
<div class="container content">
	<h2><?php echo $pageTitle; ?></h2>
	<div id='primary'>
	<div id='capabilities'>
	<p>
	<?php echo get_option('guest_user_capabilities'); ?>
	</p>
	</div>
	<?php echo flash(); ?>
	<?php echo $this->form; ?>
	<p id='confirm'></p>
</div>
</div>
<?php echo foot(); ?>