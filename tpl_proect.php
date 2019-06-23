<?php
/*
Template Name: Проектирование
*/
?>

<?php get_header(); ?>

<section id="proect">
	<div class="b_proect-welcome puk-slide" data-section-name="light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="b_proect-welcome__title">
						Проектирование
					</div>
					<div class="esco-line"></div>
					<div class="b_proect-welcome__description">
						<?php echo carbon_get_the_post_meta('crb_proect_description') ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="b_proect-welcome-list">
						<?php
						$custom_query_proect = new WP_Query( array( 
							'post_type' => 'uslugi',
							'meta_query' => array(
								array(
									'key'     => 'crb_uslugi_proect',
									'value'   => 'no',
									'compare' => '=',
								),
							)
						) );
						if ($custom_query_proect->have_posts()) : while ($custom_query_proect->have_posts()) : $custom_query_proect->the_post(); ?>
							<div class="b_proect-welcome-list__item">
								<div class="b_proect-welcome-list__item-img">
									<img src="<?php echo carbon_get_the_post_meta('crb_uslugi_icon') ?>" alt="">
								</div>
								<div>
									<div class="b_proect-welcome-list__item-title">
										<?php the_title(); ?>
									</div>
									<a href="<?php echo get_permalink(); ?>">
										<div class="esco-button">
											Подробнее
										</div>
									</a>
								</div>
							</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
			<div class="esco-detail">
				<div class="esco-detail-right">
					<img src="<?php bloginfo('template_url') ?>/img/uslugi-detail.png" alt="">	
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>