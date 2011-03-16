<?php $theme->display('header'); ?>

	<?php $theme->display('section.identity'); ?>
	
	<?php $theme->display('section.rss-post-nav-search'); ?>
	
	<div id="single-post" class="single wide-13 flow">	
		<article class="wide-10 skip-3 end">
			<header>
				<p class="article-id"><?php echo $post->id; ?><span></span></p>
				<em class="article-date"><?php echo $post->pubdate_out; ?></em>
				<h1 class="article-title"><?php echo $post->title_out; ?></h1>
			</header>
			
			<?php echo $post->content_out; ?>

			<footer>
				<p>Bookmark/Share: <a class="share-facebook" href="http://delicious.com/post?url=<?php echo $post->permalink; ?>&amp;title=<?php echo $post->title_out; ?>" rel="nofollow">Delicious</a> | <a href="http://stumbleupon.com/submit?url=<?php echo $post->permalink; ?>&amp;title=<?php echo $post->title_out; ?>" rel="nofollow">StumbleUpon</a></p>
			</footer>
		</article>
		
		<aside id="comment-message" class="wide-10 skip-3 end">
			<?php $theme->display('comments'); ?>
		</aside>
	</div>
		
	<div class="sidebar-content wide-5 skip-2 flow end">
		<?php $theme->display('sidebar'); ?>
	</div>

<?php $theme->display('footer'); ?>	