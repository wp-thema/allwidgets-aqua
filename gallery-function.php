<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>gallery-function.css" type="text/css" media="screen" />
<div id="gallerypost-<?php the_ID(); ?>">
    <div id="gallerypost_main-<?php the_ID(); ?>">
	<div id="gallerypost_thumbnail-<?php the_ID(); ?>">
		<?php the_post_thumbnail( 'thumbnail' ); ?>
	</div>
	<div id="gallerypost_body-<?php the_ID(); ?>">
		<?php $images =& get_children( 'post_type=attachment&post_mime_type=image' ); ?>
		<h2><a rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div><small>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y') ?></small></div>
		<div>
			<?php the_excerpt(); ?>
		</div>
	</div>
    </div>
    <div id="gallerypost_sub-<?php the_ID(); ?>">
	<div id="gallerypost_sub_left-<?php the_ID(); ?>">
		<p><?php echo get_the_term_list( $post->ID, 'people', 'Who: ', ', ', '<br />' ); ?></p>
		<p><?php echo get_the_term_list( $post->ID, 'events', 'What: ', ', ', '<br />' ); ?></p>
             	<p><?php echo get_the_term_list( $post->ID, 'places', 'Where: ', ', ', '' ); ?></p>
	</div>
	<div id"gallerypost_sub_right-<?php the_ID(); ?>">
		This Album contains <?php echo $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_parent = '$post->ID' AND post_type = 'attachment'" ); ?> items.
	</div>
    </div>
</div>