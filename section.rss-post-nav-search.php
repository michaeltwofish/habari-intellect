<div id="rss-post-nav-search" class="single wide-20">
	<a id="atom-subscribe" class="wide-3 flow" href="/atom/1/">
		<p>
			<span class="label">Subscribe</span> to the blog feed
		</p>
	</a>
	
	<ul id="post-nav">
	<?php
		if ($request->display_entry && isset($post))
		{
			if ($previous = $post->descend())
			{
	?>
				<li class="wide-5 or-border-1 flow">
					<span class="label">Previous Post</span>
					<a href="<?php echo $previous->permalink ?>" title="<?php echo $previous->title ?>"><?php echo $previous->title ?></a>
				</li>
	<?php
			}
			if ($next = $post->ascend())
			{
	?>
				<li class="wide-5 or-border-1 flow end">
					<span class="label">Next Post</span>
					<a href="<?php echo $next->permalink ?>" title="<?php echo $next->title ?>"><?php echo $next->title ?></a>
				</li>
	<?php
			}
		}
	?>
	</ul>
	
	<form id="search-site" class="wide-5" action="<?php URL::out('display_search'); ?>">
		<p>
			<label for="searchquery" class="overlabel">Search the site</label>
			<input id="searchquery" type="text" name="criteria" />
			<button id="search" type="submit"><span>Go!</span></button>
		</p>
	</form>
	
	<span class="clear"></span>
</div>