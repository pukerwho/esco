<?php get_header(); ?>

<div class="b_news">
	<div class="container">
		<div class="row">
			<?php 
				global $wp_query, $wp_rewrite;  
				$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
				$custom_query_news = new WP_Query( array( 
					'post_type' => 'news', 
					'posts_per_page' => 10,
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

		<div class="row">
			<div class="col-md-12 text-center">
				<div class="b_pagination">
					<?php 
						$big = 999999999; // уникальное число
						echo paginate_links( array(
							'format'  => 'page/%#%',
							'current'   => $current,
							'total'   => $custom_query_news->max_num_pages,
							'prev_next' => true,
							'next_text' => (''),
							'prev_text' => ('')
						)); 
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>