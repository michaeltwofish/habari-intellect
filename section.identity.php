<div id="identity" class="wide-20">
	<header>
		<hgroup>
			<h1 id="site-desc" class="wide-8 flow"><a href="<?php Site::out_url('habari'); ?>"><?php Options::out('title'); ?></a></h1>
			<h2 id="tagline"><?php Options::out('tagline'); ?></h2>
		</hgroup>
	</header>
	
	<nav class="main-nav">
		<ul class="main-nav-list">
			<li class="main-nav-item<?php if($request->display_home) { ?> main-nav-item-active<?php } ?>"><a class="main-nav-link" href="<?php Site::out_url('habari'); ?>" title="<?php Options::out('title'); ?>">Home</a></li>
			<?php
				// Menu based on pages.
				foreach ( $pages as $page_link ) {
			?>
				<li class="main-nav-item<?php if(isset($post) && $post->slug == $page_link->slug) { ?> main-nav-item-active<?php } ?>"><a class="main-nav-link" href="<?php echo $page_link->permalink; ?>" title="<?php echo $page_link->title; ?>"><?php echo $page_link->title; ?></a></li>
			<?php
				}
			?>
		</ul>
	</nav>
</div>