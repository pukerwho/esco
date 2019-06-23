<?php
/*
Template Name: Энергоаудит
*/
?>

<?php get_header(); ?>

<section id="audit_welcome">
	<div class="b_audit-welcome puk-slide" data-section-name="light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<div class="b_audit-welcome-title">
						<?php echo carbon_get_the_post_meta('crb_energoaudit_title') ?>
					</div>
					<div class="esco-line"></div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7">
					<div class="b_audit-welcome-description">
						<?php echo carbon_get_the_post_meta('crb_energoaudit_description') ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="esco-list">
						<div class="esco-list__item">
							<div class="esco-list__item-img">
								<img src="<?php echo carbon_get_the_post_meta('crb_energoaudit_icon_one') ?>" alt="">
							</div>
							<div>
								<div class="esco-list__item-title">
									<?php echo carbon_get_the_post_meta('crb_energoaudit_text_one') ?>
								</div>
								<a href="#audit_building">
									<div class="esco-button">
										Подробнее
									</div>
								</a>
							</div>
						</div>
						<div class="esco-list__item">
							<div class="esco-list__item-img">
								<img src="<?php echo carbon_get_the_post_meta('crb_energoaudit_icon_two') ?>" alt="">
							</div>
							<div>
								<div class="esco-list__item-title">
									<?php echo carbon_get_the_post_meta('crb_energoaudit_text_two') ?>
								</div>
								<a href="#audit_teplo">
									<div class="esco-button">
										Подробнее
									</div>
								</a>
							</div>
						</div>
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

<section id="audit_whyus">
	<div class="b_audit-whyus puk-slide" data-section-name="dark" style="background: url('<?php echo carbon_get_the_post_meta('crb_energo_whyus_photo') ?>');background-position: 50%; background-size: cover;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="b_audit-whyus__title animate-puk" data-effect="fade" data-delay="0.7s">
						<?php echo carbon_get_the_post_meta('crb_energo_whyus_title') ?>
					</div>
					<div class="b_audit-whyus__subtitle animate-puk" data-effect="fade" data-delay="0.9s">
						Мы берем ответственность за результат:
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="b_audit-whyus__text animate-puk" data-effect="fade" data-delay="1.1s">
						<?php echo carbon_get_the_post_meta('crb_energo_whyus_text') ?>
					</div>
					<div class="b_audit-whyus__quote animate-puk" data-effect="fade" data-delay="1.3s">
						<?php echo carbon_get_the_post_meta('crb_energo_whyus_quote') ?>
						<div class="b_audit-whyus__quote-icon">
							<img src="<?php bloginfo('template_url') ?>/img/quote.svg" alt="">
						</div>
					</div>
					<div class="b_audit-whyus__line animate-puk" data-effect="fade" data-delay="1.4s"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="audit_building">
	<div class="b_audit-building puk-slide" data-section-name="light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-1">
					<div class="b_audit-building__title animate-puk" data-effect="fade" data-delay="0.7s">
						<?php echo carbon_get_the_post_meta('crb_energoaudit_text_one') ?>
					</div>
					<div class="esco-line animate-puk" data-effect="fade" data-delay="0.9s"></div>
					<div class="b_audit-building__description animate-puk" data-effect="fade" data-delay="1.1s">
						<?php echo carbon_get_the_post_meta('crb_energo_build_description') ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="b_audit-building__subtitle animate-puk" data-effect="fade" data-delay="1.3s">
						Основные этапы:
					</div>
					<div class="b_audit-building__steps">
						<div class="b_audit-building__step animate-puk" data-effect="fade" data-delay="1.4s">
							<div class="b_audit-building__step-number">
								01
							</div>
							<div class="b_audit-building__step-icon">
								<img src="<?php echo carbon_get_the_post_meta('crb_energo_build_icon_one') ?>" alt="">
							</div>
							<div class="b_audit-building__step-title">
								<?php echo carbon_get_the_post_meta('crb_energo_build_title_one') ?>
							</div>
							<div class="b_audit-building__step-description">
								<?php echo carbon_get_the_post_meta('crb_energo_build_text_one') ?>
							</div>
						</div>
						<div class="b_audit-building__step animate-puk" data-effect="fade" data-delay="1.5s">
							<div class="b_audit-building__step-number">
								02
							</div>
							<div class="b_audit-building__step-icon">
								<img src="<?php echo carbon_get_the_post_meta('crb_energo_build_icon_two') ?>" alt="">
							</div>
							<div class="b_audit-building__step-title">
								<?php echo carbon_get_the_post_meta('crb_energo_build_title_two') ?>
							</div>
							<div class="b_audit-building__step-description">
								<?php echo carbon_get_the_post_meta('crb_energo_build_text_two') ?>
							</div>
						</div>
						<div class="b_audit-building__step animate-puk" data-effect="fade" data-delay="1.6s">
							<div class="b_audit-building__step-number">
								03
							</div>
							<div class="b_audit-building__step-icon">
								<img src="<?php echo carbon_get_the_post_meta('crb_energo_build_icon_three') ?>" alt="">
							</div>
							<div class="b_audit-building__step-title">
								<?php echo carbon_get_the_post_meta('crb_energo_build_title_three') ?>
							</div>
							<div class="b_audit-building__step-description">
								<?php echo carbon_get_the_post_meta('crb_energo_build_text_three') ?>
							</div>
						</div>
						<div class="b_audit-building__step animate-puk" data-effect="fade" data-delay="1.7s">
							<div class="b_audit-building__step-number">
								04
							</div>
							<div class="b_audit-building__step-icon">
								<img src="<?php echo carbon_get_the_post_meta('crb_energo_build_icon_four') ?>" alt="">
							</div>
							<div class="b_audit-building__step-title">
								<?php echo carbon_get_the_post_meta('crb_energo_build_title_four') ?>
							</div>
							<div class="b_audit-building__step-description">
								<?php echo carbon_get_the_post_meta('crb_energo_build_text_four') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="p-absolute">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="b_audit-building__detail animate-puk"  data-effect="fade" data-delay="1.9s">
							<img src="<?php bloginfo('template_url') ?>/img/ingi-detail.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="audit_teplo">
	<div class="b_audit-teplo puk-slide" data-section-name="dark" style="background: url('<?php echo carbon_get_the_post_meta('crb_energo_teplo_bg') ?>');background-position: 50%; background-size: cover;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="b_audit-teplo__title animate-puk" data-effect="fade" data-delay="0.7s">
						<?php echo carbon_get_the_post_meta('crb_energoaudit_text_two') ?>
					</div>
					<div class="b_audit-teplo__description animate-puk" data-effect="fade" data-delay="0.9s">
						<?php echo carbon_get_the_post_meta('crb_energo_teplo_desc') ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="b_audit-teplo__grid">
						<div class="b_audit-teplo__item animate-puk" data-effect="fade" data-delay="1.1s">
							<div class="b_audit-teplo__item-number">
								01
							</div>
							<div class="b_audit-teplo__item-text">
								<?php echo carbon_get_the_post_meta('crb_energo_teplo_step_one') ?>
							</div>
						</div>
						<div class="b_audit-teplo__item animate-puk" data-effect="fade" data-delay="1.3s">
							<div class="b_audit-teplo__item-number">
								02
							</div>
							<div class="b_audit-teplo__item-text">
								<?php echo carbon_get_the_post_meta('crb_energo_teplo_step_two') ?>
							</div>
						</div>
						<div class="b_audit-teplo__item animate-puk" data-effect="fade" data-delay="1.5s">
							<div class="b_audit-teplo__item-number">
								03
							</div>
							<div class="b_audit-teplo__item-text">
								<?php echo carbon_get_the_post_meta('crb_energo_teplo_step_three') ?>
							</div>
						</div>
						<div class="b_audit-teplo__item animate-puk" data-effect="fade" data-delay="1.7s">
							<div class="b_audit-teplo__item-number">
								04
							</div>
							<div class="b_audit-teplo__item-text">
								<?php echo carbon_get_the_post_meta('crb_energo_teplo_step_four') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>