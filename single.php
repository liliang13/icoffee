<?php get_header(); ?>
<div id="post">
<div id="center">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="date">
		<?php the_time('Y-n-d H:i:s') ?> 
	<div class="border"></div>
		<?php edit_post_link('Edit', ' &#124; ', ''); ?>
	</div>
<?php the_content('阅读全文'); ?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
		</div>
</div>
</div>
<?php get_footer(); ?>
</body>
</html>