<?php $t =& peTheme();?>
<nav class="my-sticky-nav">
<div class="inner">
	<div id="logo">
		<a href="<?php echo home_url(); ?>">
			<img alt="logo" src="<?php echo $t->options->get("logo") ?>">
		</a>
	</div>
	<?php $t->menu->show("main"); ?>
    </div>
</nav>