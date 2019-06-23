<?php
/*
Template Name: Контракты
*/
?>

<?php get_header(); ?>

<section id="contract_welcome">
	<div class="b_contract-welcome puk-slide" data-section-name="light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="b_contract-welcome__title">
						<?php echo carbon_get_the_post_meta('crb_contract_main_title') ?>
					</div>
					<div class="esco-line"></div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="b_contract-welcome__description">
						<?php echo carbon_get_the_post_meta('crb_contract_main_description') ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="b_contract-welcome__icons">
						<div class="b_contract-welcome__icon">
							<img src="<?php echo carbon_get_the_post_meta('crb_contract_main_icon_one') ?>" alt="">
						</div>
						<div class="b_contract-welcome__icon">
							<img src="<?php echo carbon_get_the_post_meta('crb_contract_main_icon_two') ?>" alt="">
						</div>
						<div class="b_contract-welcome__icon">
							<img src="<?php echo carbon_get_the_post_meta('crb_contract_main_icon_three') ?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="b_contract-welcome__bottom">
						<?php echo carbon_get_the_post_meta('crb_contract_main_text') ?>
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

<section id="contract_what">
	<div class="b_contract-what puk-slide" data-section-name="dark" style="background: url('<?php echo carbon_get_the_post_meta('crb_contract_second_bg') ?>');background-position: 50%; background-size: cover;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7">
					<div class="b_contract-what__title animate-puk" data-effect="fade" data-delay="0.7s">
						Что это означает
					</div>
					<div class="b_contract-what__subtitle animate-puk" data-effect="fade" data-delay="0.9s">
						<?php echo carbon_get_the_post_meta('crb_contract_second_description') ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="b_contract-what__steps">
						<div class="b_contract-what__step animate-puk" data-effect="fade" data-delay="1s">
							<div class="b_contract-what__step-icon">
								<img src="<?php echo carbon_get_the_post_meta('crb_contract_second_step_one_icon') ?>" alt="">
							</div>
							<div class="b_contract-what__step-text">
								<?php echo carbon_get_the_post_meta('crb_contract_second_step_one_text') ?>
							</div>
						</div>
						<div class="b_contract-what__step animate-puk" data-effect="fade" data-delay="1.1s">
							<div class="b_contract-what__step-icon">
								<img src="<?php echo carbon_get_the_post_meta('crb_contract_second_step_two_icon') ?>" alt="">
							</div>
							<div class="b_contract-what__step-text">
								<?php echo carbon_get_the_post_meta('crb_contract_second_step_two_text') ?>
							</div>
						</div>
						<div class="b_contract-what__step animate-puk" data-effect="fade" data-delay="1.2s">
							<div class="b_contract-what__step-icon">
								<img src="<?php echo carbon_get_the_post_meta('crb_contract_second_step_three_icon') ?>" alt="">
							</div>
							<div class="b_contract-what__step-text">
								<?php echo carbon_get_the_post_meta('crb_contract_second_step_three_text') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-9">
					<div class="b_contract-what__bottom animate-puk" data-effect="fade" data-delay="1.4s">
						<div class="b_contract-what__bottom-icon">
							<img src="<?php echo carbon_get_the_post_meta('crb_contract_second_notice_icon') ?>" alt="">
						</div>
						<div class="b_contract-what__bottom-text">
							<?php echo carbon_get_the_post_meta('crb_contract_second_notice_text') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="scroll-down animate-puk" data-effect="fade" data-delay="1.6s">
			<a href="#contract_how">
				<img src="<?php bloginfo('template_url') ?>/img/down.png" alt="">
			</a>
		</div>
	</div>
</section>

<section id="contract_how">
	<div class="b_contract-how puk-slide" data-section-name="light">
		<div class="b_contract-how__top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="b_contract-how__title animate-puk" data-effect="fade" data-delay="0.7s">
							Как это работает?
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="b_contract-how__grid">
							<div class="b_contract-how__item animate-puk" data-effect="fade" data-delay="0.8s">
								<div class="b_contract-how__item-number">
									01
								</div>
								<div class="b_contract-how__item-img">
									<img src="<?php echo carbon_get_the_post_meta('crb_contract_how_step_one_icon') ?>" alt="">
								</div>
								<div class="b_contract-how__item-text">
									<?php echo carbon_get_the_post_meta('crb_contract_how_step_one_text') ?>
								</div>
							</div>
							<div class="b_contract-how__item animate-puk" data-effect="fade" data-delay="0.9s">
								<div class="b_contract-how__item-number">
									02
								</div>
								<div class="b_contract-how__item-img">
									<img src="<?php echo carbon_get_the_post_meta('crb_contract_how_step_two_icon') ?>" alt="">
								</div>
								<div class="b_contract-how__item-text">
									<?php echo carbon_get_the_post_meta('crb_contract_how_step_two_text') ?>
								</div>
							</div>
							<div class="b_contract-how__item animate-puk" data-effect="fade" data-delay="1s">
								<div class="b_contract-how__item-number">
									03
								</div>
								<div class="b_contract-how__item-img">
									<img src="<?php echo carbon_get_the_post_meta('crb_contract_how_step_three_icon') ?>" alt="">
								</div>
								<div class="b_contract-how__item-text">
									<?php echo carbon_get_the_post_meta('crb_contract_how_step_three_text') ?>
								</div>
							</div>
							<div class="b_contract-how__item animate-puk" data-effect="fade" data-delay="1.1s">
								<div class="b_contract-how__item-number">
									04
								</div>
								<div class="b_contract-how__item-img">
									<img src="<?php echo carbon_get_the_post_meta('crb_contract_how_step_four_icon') ?>" alt="">
								</div>
								<div class="b_contract-how__item-text">
									<?php echo carbon_get_the_post_meta('crb_contract_how_step_four_text') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b_contract-how__bottom" style="background: url('<?php echo carbon_get_the_post_meta('crb_contract_zakon_bg') ?>');background-position: 50%; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="b_contract-how__bottom-title animate-puk" data-effect="fade" data-delay="1.4s">
							Какова законодательная база энергосервиса Украины?
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="b_contract-how__bottom-grid">
							<div class="b_contract-how__bottom-item animate-puk" data-effect="fade" data-delay="1.5s">
								<?php echo carbon_get_the_post_meta('crb_contract_zakon_one') ?>
							</div>
							<div class="b_contract-how__bottom-item animate-puk" data-effect="fade" data-delay="1.6s">
								<?php echo carbon_get_the_post_meta('crb_contract_zakon_two') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>