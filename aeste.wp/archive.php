<?php get_header() ?>
  <div id="container" class="row">
  <?php get_sidebar() ?>
  <div class="column grid_9">
  <div id="content">  
  <?php the_post() ?>
  <?php if ( is_day() ) : ?>
    <h1 class="page-title"><?php printf( __( 'Daily Archives: <span>%s</span>', 'sandbox' ), get_the_time(get_option('date_format')) ) ?></h1>
       <?php elseif ( is_month() ) : ?>
       <h1 class="page-title"><?php printf( __( 'Monthly Archives: <span>%s</span>', 'sandbox' ), get_the_time('F Y') ) ?></h1>
       <?php elseif ( is_year() ) : ?>
       <h1 class="page-title"><?php printf( __( 'Yearly Archives: <span>%s</span>', 'sandbox' ), get_the_time('Y') ) ?></h1>
       <?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
       <h1 class="page-title"><?php _e( 'Blog Archives', 'sandbox' ) ?></h1>
       <?php endif; ?>
<?php rewind_posts() ?>
  <div id="nav-above" class="navigation">
  <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
  <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
  </div>
  <?php while ( have_posts() ) : the_post(); ?>
<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
    <h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __( 'Permalink to %s', 'sandbox' ), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h2>
    <div class="entry-content">
    <?php the_excerpt( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
</div>
				<div class="entry-meta meta">
				 <abbr class="published" title="<?php the_time('c') ?>">
				 <?php unset($previousday); printf( __( '%1$s', 'sandbox' ), the_date( '', '', '', false ) ) ?>
				 </abbr>
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="meta-sep">|</span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
					<span class="meta-sep">|</span>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
<?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
				</div>
			</div><!-- .post -->
<?php endwhile; ?>
			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' ) ) ?></div>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?></div>
			</div>
		</div><!-- #content .hfeed -->																			
	</div><!-- #container -->
</div>
<?php get_footer() ?>