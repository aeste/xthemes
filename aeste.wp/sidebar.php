	<div id="primary" class="sidebar column grid_3">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>	   
	   <ul id="pages"><?php _e( 'Pages', 'sandbox' ) ?></h3>
	      <?php wp_list_pages('title_li=&sort_column=menu_order' ) ?>
	      </ul>
	   <ul id="categories"><?php _e( 'Categories', 'sandbox' ) ?></h3>
	      <?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 
	      </ul>
	   <ul id="archives"><?php _e( 'Archives', 'sandbox' ) ?></h3>
	      <?php wp_get_archives('type=monthly') ?>
	      </ul>		
<?php endif; // end primary sidebar widgets  ?>


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>
			<ul id="search"><label for="s"><?php _e( 'Search', 'sandbox' ) ?></label></h3>
				<form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="10" tabindex="1" />
						<input type="submit" class="button" value="<?php _e( 'Find', 'sandbox' ) ?>" tabindex="2" />
					</div>
			  </form>
			  </ul>

<?php wp_list_bookmarks('title_before=&title_after=</h3>&show_images=1') ?>
			  
			  <ul id="rss-links"><?php _e( 'RSS Feeds', 'sandbox' ) ?></h3>
			  <li><a href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'All posts', 'sandbox' ) ?></a></li>
			  <li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'All comments', 'sandbox' ) ?></a></li>
			  </ul>

			<ul id="meta">
				<?php _e( 'Meta', 'sandbox' ) ?></h3>
					<?php wp_register() ?>
					<li><?php wp_loginout() ?></li>
					<?php wp_meta() ?>

			</ul>

<?php endif; // end secondary sidebar widgets  ?>

	</div><!-- #secondary .sidebar -->
