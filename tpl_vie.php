<?php
/*
Template Name: ВИЭ
*/
?>

<?php get_header(); ?>

<section id="vie">
	<div class="b_vie-welcome puk-slide" data-section-name="light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="b_vie-welcome__title">
						<?php echo carbon_get_the_post_meta('crb_vie_main_title') ?>
					</div>
					<div class="esco-line"></div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="b_vie-welcome__description">
						<?php echo carbon_get_the_post_meta('crb_vie_main_description') ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-11">
					<div class="b_vie-welcome__list">
						<?php
						$instruments = carbon_get_the_post_meta('crb_vie_instrum');
						foreach( $instruments as $instrum ) :?>
							<div class="b_vie-welcome__item">
								<div class="b_vie-welcome__item-img">
									<img src="<?php echo $instrum['crb_vie_instrum_photo'] ?>" alt="">
								</div>
								<div class="b_vie-welcome__item-title">
									<?php echo $instrum['crb_vie_instrum_text'] ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="solutions">
	<div class="b_vie-solutions puk-slide" data-section-name="light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="b_vie-solutions__text animate-puk" data-effect="fade" data-daley="0.7s">
						<?php echo carbon_get_the_post_meta('crb_vie_solutions_description') ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-11">
					<div class="b_vie-solutions__grid">
						<?php
						$i=0;
						$solutions = carbon_get_the_post_meta('crb_vie_solutions');
						foreach( $solutions as $solution ) : ?>
							<?php $i++; $i=$i/2 ?>
							<div class="b_vie-solutions__item animate-puk" data-effect="fade" data-delay="<?php echo $i ?>s">
								<div class="b_vie-solutions__item-img">
									<img src="<?php echo $solution['crb_vie_solutions_photo'] ?>" alt="">
								</div>
								<div class="b_vie-solutions__item-title">
									<?php echo $solution['crb_vie_solutions_text'] ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>