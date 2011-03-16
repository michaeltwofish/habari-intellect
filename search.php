<?php $theme->display('header'); ?>

	<?php $theme->display('section.identity'); ?>
	
	<div id="search-display" class="wide-20">
		<header class="wide-20">
			<p class="search-results-status wide-10 flow">Search results for <em>&#8220;<?php _e('%s', array(htmlspecialchars($criteria))); ?>&#8221;</em></p>

			<form id="search-site" class="wide-5 flow" action="<?php URL::out('display_search'); ?>">
				<p>
					<label for="searchquery" class="overlabel">Search the site</label>
					<input id="searchquery" type="text" name="criteria" />
					<button id="search" type="submit"><span>Go!</span></button>
				</p>
			</form>
			
			<span class="clear"></span>
		</header>
		
		<div id="search-results">
		<?php
			$di_cloop_counter = 0;
			
			foreach ($posts as $post)
			{
				if (in_array('Sidenotes', $post->tags))
				{
					$di_cloop_counter++;
		?>
					<div class="article-aside wide-5 flow<?php if ($di_cloop_counter == 4) { echo ' end'; $di_cloop_counter = 0; }?>">
					<div class="inner">
					<article class="aside">
						<header>
							<em class="article-date"><?php echo $post->pubdate_out; ?></em>
							<h3><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h3>
						</header>
						<div class="article-content">
							<?php echo $post->content_excerpt; ?>
						</div>
					</article>
					</div>
					</div>
		<?php
				}
				else
				{
					$di_cloop_counter++;
		?>
					<div class="article wide-5 flow<?php if ($di_cloop_counter == 4) { echo ' end'; $di_cloop_counter = 0; }?>">
					<div class="inner">
					<article>
						<header>
							<em class="article-date"><?php echo $post->pubdate_out; ?></em>
							<h3><a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a></h3>
						</header>
						<div class="article-content">
							<?php /*<div class="article-body wide-7 col-2 end"><?php echo $post->content_excerpt; ?></div>*/ ?>
						</div>
					</article>
					</div>
					</div>
		<?php
				}
				//if ($di_cloop_counter == 0) { echo '<span class="clear-it"></span>'; }
			}
		?>
		</div>
	</div>

<?php $theme->display('footer'); ?>	