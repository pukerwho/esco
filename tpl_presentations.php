<?php
/*
Template Name: Презентации
*/
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="p_single puk-slide" data-section-name="light">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="p_single-img parallax-window" data-parallax data-parallax="scroll"  data-position="top" data-bleed="0" data-src="<?php echo get_the_post_thumbnail_url(); ?>"></div>
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
					<?php 
					$presnts = carbon_get_the_post_meta( 'crb_pres');
					foreach ( $presnts as $pres ): ?>
						<div class="p_single-link mb-4">
							<a href="<?php echo $pres['crb_pres_link'] ?>" target="_blank">
								<?php echo $pres['crb_pres_text'] ?>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>