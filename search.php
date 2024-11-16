<?php get_header(); ?>

<div class="content">
	
	<?php get_template_part('inc/page-title'); ?>
	
	<?php if ( have_posts() ) : ?>
		
		<?php if ( get_theme_mod('blog-layout','blog-standard') == 'blog-grid' ) : ?>
			
			<div class="entry-wrap entry-grid">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content-grid'); ?>
				<?php endwhile; ?>
			</div>
			
		<?php elseif ( get_theme_mod('blog-layout','blog-standard') == 'blog-list' ) : ?>
			
			<div class="entry-wrap entry-list">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content-list'); ?>
				<?php endwhile; ?>	
			</div>
			
		<?php else: ?>
			
			<div class="entry-wrap entry-standard">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
			</div>
			
		<?php endif; ?>
		
		<?php get_template_part('inc/pagination'); ?>
		
	<?php endif; ?>
		
</div><!--/.content-->

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>