<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="p_single puk-slide" data-section-name="light">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="p_single-img parallax-window" data-parallax data-parallax="scroll"  data-position="top" data-bleed="0" data-src="<?php echo get_the_post_thumbnail_url(); ?>"></div>
				<div class="p_single-back">
					<a href="<?php echo home_url(); ?>/news">
						<div class="p_single-back__icon">
							<img src="<?php bloginfo('template_url') ?>/img/reply.svg" alt="">
						</div>
						<div class="p_single-back__text">
							Назад к новостям
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9">
				<div class="p_single-title">
					<?php the_title(); ?>	
				</div>
				<div class="esco-line"></div>
				<div class="p_single-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p_single-recent">
					Другие новости
				</div>
				<div class="esco-line"></div>
			</div>
		</div>
		<div class="row">
			<?php 
				global $wp_query, $wp_rewrite;  
				$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
				$custom_query_news = new WP_Query( array( 
					'post_type' => 'news', 
					'posts_per_page' => 3,
				) );
			if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
			  	<div class="col-md-4">
						<div class="b_news-block">
							<div class="b_news-thumb">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							</div>
							<div class="b_news-text">
								<?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
							</div>
							<a href="<?php echo get_permalink() ?>">
								<div class="b_news-more">
									Читать новость полностью
								</div>
							</a>
						</div>
					</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>