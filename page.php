<?php 
/*
	Template Name: Page with Comments.
*/ 

get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		<?php get_post_controls(); ?>
		
		<h2><?php the_title(); ?></h2>
		
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>	
	
	<?php comments_template(); ?>
	
	</div>

	
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
