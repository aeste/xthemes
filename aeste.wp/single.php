<?php get_header() ?>

	<div id="container" class="row">
<?php get_sidebar() ?>
  <div class="column grid_9">
		<div id="content">

<?php the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h1 class="entry-title"><?php the_title() ?></h1>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
				<div class="entry-meta meta">
					<?php printf( __( 'This entry was written by %1$s, posted on <abbr class="published" title="%2$sT%3$s">%4$s at %5$s</abbr>, filed under %6$s%7$s.<br/>', 'sandbox' ),
						'<span class="author vcard"><a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a></span>',
						get_the_time('Y-m-d'),
						get_the_time('H:i:sO'),
						the_date( '', '', '', false ),
						get_the_time(),
						get_the_category_list(', '),
						get_the_tag_list( __( ' and tagged ', 'sandbox' ), ', ', '' )
						      //get_permalink(),
						      //the_title_attribute('echo=0'),
						      //comments_rss()
						      ) ?>

<?php edit_post_link( __( 'Edit', 'sandbox' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>

				</div>
			</div><!-- .post -->

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
				<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
			</div>

<?php comments_template() ?>

		</div><!-- #content -->
  </div>
	</div><!-- #container -->

<?php get_footer() ?>