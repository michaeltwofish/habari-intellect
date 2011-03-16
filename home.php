<?php $theme->display('header'); ?>

	<?php $theme->display('section.identity'); ?>
	
	<?php $theme->display('section.rss-post-nav-search'); ?>
	
		<div id="from-di" class="wide-11 flow">
		
		<?php
			foreach ($di_articles as $article)
			{
		?>
				<article class="wide-10 skip-3 end">
					<header>
						<p class="article-id"><?php echo $article->id; ?><span></span></p>
						<em class="article-date"><?php echo $article->pubdate_out; ?></em>
						<h2 class="article-title"><a href="<?php echo $article->permalink; ?>" title="<?php echo $article->title; ?>"><?php echo $article->title_out; ?></a></h2>
					</header>
					
					<?php echo $article->content_out; ?>
					
					<footer>
					</footer>
				</article>
		<?php
			}
		?>
		</div>
		
		<aside class="sidebar-content wide-5 skip-4 flow end">
			<?php $theme->display('sidebar'); ?>
		</aside>

<?php $theme->display('footer'); ?>	