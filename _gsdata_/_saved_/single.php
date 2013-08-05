<?php get_header(); ?>
<div id="posts">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<div class="date">
	<?php the_time('Y-n-d H:i:s') ?> 
		<div class="border"></div>
			<?php edit_post_link('Edit', ' &#124; ', ''); ?>
</div>
			<div class="entry">
				<?php the_content(); ?>
					<div class="tags">
						<?php the_tags('标签: ', ', ', ''); ?>
					</div>
			</div>
<!-- Duoshuo Comment BEGIN -->
	<div class="ds-thread"></div>
	<script type="text/javascript">
	var duoshuoQuery = {short_name:"liliang13"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = 'http://static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		|| document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- Duoshuo Comment END -->
		</div>
<?php endwhile; ?>
	<div class="pagenavi">
		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?> 
	</div>
<?php else : ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php _e('Not Found'); ?></h2>
	</div>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>