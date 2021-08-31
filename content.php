<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wrap-entry-line'); ?>>	
	
	<div class="entry-line">
		<div class="entry-line-inner">
			<div class="entry-line-bullet">
				<div class="entry-line-bullet-inner"></div>
			</div>
		</div>
	</div>
	
	<div class="post-wrapper entry-line-entry group">
		<header class="entry-header group">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</header>
		<div class="entry-media">
			<?php if ( get_theme_mod('post-formats-enable','off') == 'on' ) : ?>
				<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
			<?php else: ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>">
						<div class="image-container">
							<?php the_post_thumbnail('blogstream-large'); ?>
							<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
							<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
							<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
						</div>
					</a>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="entry-content">
			<div class="entry themeform">
				
				<?php if ( get_theme_mod('excerpt-enable','off') == 'on' ) : ?>
					
					<?php if (get_theme_mod('excerpt-length','26') != '0'): ?>
						<?php the_excerpt(); ?>
						<a class="more-link" href="<?php the_permalink(); ?>"><?php esc_html_e('Continue reading...','blogstream'); ?></a>
					<?php endif; ?>
					
				<?php else: ?>
				
					<?php the_content(esc_html__('Continue reading...','blogstream')); ?>
				
				<?php endif; ?>
				
			</div>
		</div>
	</div>
	
	<div class="entry-meta group">
		<div class="entry-meta-inner">
			<span class="posted-on"><?php the_time( get_option('date_format') ); ?></span>
			<span class="byline"><?php esc_html_e('by','blogstream'); ?> <span class="author"><?php the_author_posts_link(); ?></span></span>
			<span class="entry-category"><?php the_category(' '); ?></span>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
				<a class="entry-comments" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
			<?php endif; ?>
		</div>
	</div>

</article><!--/.post-->	