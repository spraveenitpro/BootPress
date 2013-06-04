<div id="sidebar" class="span3 pull-right">
    <div class="well sidebar-nav">
        <ul class="nav nav-list">

            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
            
                <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

            	<?php get_search_form(); ?>
            
            	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
            
            	<li class="nav-header">Archives</li>
            	<ul>
            		<?php wp_get_archives('type=monthly'); ?>
            	</ul>
                
                <li class="nav-header">Categories</li>
                <ul>
            	   <?php wp_list_categories('show_count=1&title_li='); ?>
                </ul>
                
            	<?php wp_list_bookmarks(); ?>
            
            	<li class="nav-header">Meta</li>
            	<ul>
            		<?php wp_register(); ?>
            		<li><?php wp_loginout(); ?></li>
            		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
            		<?php wp_meta(); ?>
            	</ul>
            	
            	<li class="nav-header">Subscribe</li>
            	<ul>
            		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
            		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
            	</ul>
        	
        	<?php endif; ?>

        </ul>
    </div>
</div>