<?php
 // блок с тремя последними записями из блога
 ?>
<div class="gp-inner-page__content"> 
	<span class="thp-recent-posts-title"><?php _e('Новое в блоге', 'gp-agency'); ?></span>
	 <div class="port flex-port">
 
		<?php 
			 $query = new WP_Query( array('posts_per_page' => 3) );
			 while ( $query->have_posts() ) : $query->the_post(); 
		?>
			<div class="thp-recent-post-item">
			<?php
			// изображение записи 
			recent_thumbnail();
			?>
			<span><a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></span>
			</div><!-- end thp-recent-post item -->
		<?php 
		endwhile;
		wp_reset_postdata(); 
		?>
 
 	</div><!-- end flex port -->
</div><!-- end gp-inner-page__content -->