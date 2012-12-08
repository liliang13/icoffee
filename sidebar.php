<div class="sidebar">
<ul>
<iframe width="265" height="300" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=265&height=300&fansRow=1&ptype=1&speed=0&skin=1&isTitle=0&noborder=0&isWeibo=1&isFans=0&uid=1580232052&verifier=491a9449&dpc=1"></iframe>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

<?php wp_list_pages('depth=3&title_li=<h2>页面</h2>'); ?>

<li>
<h2><?php _e('Categories'); ?></h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
</li>

<li>
<h2><?php _e('Archives'); ?></h2>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
</li>



<?php endif; ?>

</ul>

</div>
