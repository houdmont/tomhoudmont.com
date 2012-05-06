<div class="row page-header">
	<div class="span4">
		<h1>Tom Houdmont</h1>
	</div>
	<div class="span5 offset2">

			<?php $topnavlinks = array('/' => 'Home', '/blog/' => 'Blog', '/contact/' => 'Contact Me'); ?>

			<ul class="nav nav-tabs">

				<?php foreach($topnavlinks as $k => $v) : ?>

				<?php echo '<li>' . anchor(ENV_LINK_PATH . $k, $v, 'title="'.$v.'"') . '</li>'; ?>

				<?php endforeach; ?>

			</ul>
	</div>
</div>