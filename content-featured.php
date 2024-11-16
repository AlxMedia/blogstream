<?php $format = get_post_format(); ?>

<div class="featured-item-outer group">
	<div class="featured-item-wrap group">
	
		<div class="featured-item">
		
			<a class="featured-item-link" href="<?php the_permalink(); ?>"></a>
			
			<div class="featured-item-thumb" style="background-image:url('<?php if ( has_post_thumbnail() ): ?><?php the_post_thumbnail_url('blogstream-medium'); ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-medium.png<?php endif; ?>');">	
				<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-play"></i></span>'; ?>
				<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-volume-up"></i></span>'; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-star"></i></span>'; ?>
			</div>
			
			<div class="featured-item-content">
				<h3 class="featured-item-title"><?php the_title(); ?></h3>
			</div>
			
		</div>
		
	</div>
</div>