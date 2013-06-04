<?php get_header(); ?>

          <div class="hero-unit">
            <h1>Hello, world!</h1>
            <p>This mini-site demonstrates integration of all necessary Wordpress template elements into the Bootstrap framework. Below this hero unit are a few of the most recent posts, which will fill out dynamically in span4-classed divs. A post template is also included and can be viewed by selecting one of the entries.</p>
          </div>

          <div class="row-fluid">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		              <div class="span4" <?php post_class() ?> id="post-<?php the_ID(); ?>">
		                  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		                  <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
		                  <div class="entry">
		                    <?php the_excerpt(); ?>
		                  </div>
		                  <div class="postmetadata">
		                    <?php the_tags('Tags: ', ', ', '<br />'); ?>
		                    Posted in <?php the_category(', ') ?> | 
		                    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
		                  </div>
		              <p><a class="btn" href="<?php the_permalink() ?>">Read More &raquo;</a></p>
		            </div><!--/span-->

				<?php endwhile; ?>
				<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
				<?php else : ?>
				  <h2>Not Found</h2>
				<?php endif; ?>
          </div><!--/row-->


<?php get_footer(); ?>