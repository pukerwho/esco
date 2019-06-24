<?php
/*
Template Name: Main
*/
?>

<?php get_header(); ?>

<section id="welcome">
	<div class="b_welcome puk-slide" style="background: url('<?php echo carbon_get_the_post_meta('crb_mainblock_photo') ?>');background-position: 50%; background-size: cover;" data-slide-id="1" data-section-name="dark">
		<div class="b_welcome-absolute"></div>
		<div class="b_welcome-text">
			<?php echo carbon_get_the_post_meta('crb_mainblock_text') ?>
		</div>
		<div class="scroll-down">
			<a href="#uslugi">
				<img src="<?php bloginfo('template_url') ?>/img/down.png" alt="">
			</a>
		</div>
	</div>
</section>

<section id="uslugi">
	<div class="b_uslugi puk-slide" data-slide-id="2" data-section-name="light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<div class="animate-puk-mask">
						<div class="b_uslugi-title animate-puk">
							<?php echo carbon_get_the_post_meta('crb_uslugi_title') ?>
						</div>
					</div>
					<div class="esco-line mx-auto"></div>
					<div class="animate-puk-mask">
						<div class="b_uslugi-description animate-puk">
							<?php echo carbon_get_the_post_meta('crb_uslugi_description') ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-9">
					<div class="b_uslugi-list">
						<div class="b_uslugi-item animate-puk" data-effect="fade" data-delay="1s">
							<div class="b_uslugi-item__img">
								<img src="<?php echo carbon_get_the_post_meta('crb_uslugi_icon_one') ?>" alt="">
							</div>
							<div>
								<div class="b_uslugi-item__title">
									<?php echo carbon_get_the_post_meta('crb_uslugi_text_one') ?>
								</div>
								<a href="#energoeffect">
									<div class="esco-button">
										Подробнее
									</div>	
								</a>
							</div>
						</div>
						<div class="b_uslugi-item animate-puk" data-effect="fade" data-delay="1.2s">
							<div class="b_uslugi-item__img">
								<img src="<?php echo carbon_get_the_post_meta('crb_uslugi_icon_two') ?>" alt="">
							</div>
							<div>
								<div class="b_uslugi-item__title">
									<?php echo carbon_get_the_post_meta('crb_uslugi_text_two') ?>
								</div>
								<a href="#ingi">
									<div class="esco-button">
										Подробнее
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="animate-puk-mask">
				<div class="b_uslugi-detail animate-puk">
					<img src="<?php bloginfo('template_url') ?>/img/uslugi-detail.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section id="approach">
	<div class="b_approach puk-slide" data-slide-id="3" data-section-name="dark" style="background: url('<?php echo carbon_get_the_post_meta('crb_aboutus_photo') ?>');background-position: 50%; background-size: cover;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<div class="b_approach-title animate-puk" data-effect="fade" data-delay="0.8s">
						<?php echo carbon_get_the_post_meta('crb_aboutus_title') ?>
					</div>
					
					<div class="b_approach-subtitle animate-puk" data-effect="fade" data-delay="0.9s">
							Наш подход
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7">
					<div class="animate-puk-mask">
						<div class="b_approach-text animate-puk" data-effect="fade" data-delay="1s">
							<?php echo carbon_get_the_post_meta('crb_aboutus_text') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="scroll-down">
			<a href="#energoeffect">
				<img src="<?php bloginfo('template_url') ?>/img/down.png" alt="">
			</a>
		</div>
	</div>
</section>

<section id="energoeffect">
	<div class="b_energoeffect puk-slide" data-slide-id="4" data-section-name="light">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="animate-puk-mask">
						<div class="b_energoeffect-title animate-puk">
							Энергоэффективные мероприятия и модернизация
						</div>
					</div>
					<div class="esco-line animate-puk"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="b_energoeffect-list">
						<div class="b_energoeffect-item animate-puk" data-effect="fade" data-delay="1.2s">
							<div class="b_energoeffect-item__img">
								<img src="<?php echo carbon_get_the_post_meta('crb_energo_icon_one') ?>" alt="">
							</div>
							<div class="b_energoeffect-item__content">
								<div class="b_energoeffect-item__text">
									<?php echo carbon_get_the_post_meta('crb_energo_text_one') ?>
								</div>
								<a href="<?php echo get_page_url('tpl_contract') ?>">
									<div class="esco-button">
										Подробнее
									</div>
								</a>
							</div>
						</div>
						<div class="b_energoeffect-item animate-puk" data-effect="fade" data-delay="1.4s">
							<div class="b_energoeffect-item__img">
								<img src="<?php echo carbon_get_the_post_meta('crb_energo_icon_two') ?>" alt="">
							</div>
							<div class="b_energoeffect-item__content">
								<div class="b_energoeffect-item__text">
									<?php echo carbon_get_the_post_meta('crb_energo_text_two') ?>
								</div>
								<a href="<?php echo get_page_url('tpl_vie') ?>">
									<div class="esco-button">
										Подробнее
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b_energoeffect-detail animate-puk">
			<img src="<?php bloginfo('template_url') ?>/img/energoeffect-detail.png" alt="">
		</div>
	</div>
</section>

<section id="ingi">
	<div class="b_ingi puk-slide" data-section-name="light">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="animate-puk-mask">
						<div class="b_ingi-title animate-puk" data-effect="fade-down" data-delay="0.8s">
							Инжиниринговые услуги
						</div>
					</div>
					<div class="esco-line animate-puk" data-effect="fade" data-delay="1s"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="b_ingi-list">
						<div class="b_ingi-item animate-puk" data-effect="fade" data-delay="1.2s">
							<div class="b_ingi-item__img">
								<img src="<?php bloginfo('template_url') ?>/img/energoaudit-icon.png" alt="">
							</div>
							<div class="b_ingi-item__content">
								<div class="b_ingi-item__text">
									Энергоаудит
								</div>
								<a href="<?php echo get_page_url('tpl_energoaudit') ?>">
									<div class="esco-button">
										Подробнее
									</div>
								</a>
							</div>
						</div>
						<div class="b_ingi-item animate-puk" data-effect="fade" data-delay="1.4s">
							<div class="b_ingi-item__img">
								<img src="<?php bloginfo('template_url') ?>/img/proectirovanie.png" alt="">
							</div>
							<div class="b_ingi-item__content">
								<div class="b_ingi-item__text">
									Проектирование
								</div>
								<a href="<?php echo get_page_url('tpl_proect') ?>">
									<div class="esco-button">
										Подробнее
									</div>
								</a>
							</div>
						</div>
						<div class="b_ingi-item animate-puk" data-effect="fade" data-delay="1.6s">
							<div class="b_ingi-item__img">
								<img src="<?php bloginfo('template_url') ?>/img/podriad.png" alt="">
							</div>
							<div class="b_ingi-item__content">
								<div class="b_ingi-item__text">
									Подрядные работы
								</div>
								<a href="<?php echo get_page_url('tpl_podryad') ?>">
									<div class="esco-button">
										Подробнее
									</div>
								</a>
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
						<div class="b_ingi-detail animate-puk">
							<img src="<?php bloginfo('template_url') ?>/img/ingi-detail.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="facts">
	<div class="b_facts puk-slide" style="background: url('<?php bloginfo('template_url') ?>/img/facts-bg.png');background-position: 50%; background-size: cover;" data-section-name="dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="b_facts-title animate-puk" data-effect="fade" data-delay="0.8s">
						Факты
						<br>
						которыми мы гордимся
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="b_facts-grid">
						<div class="b_facts-item animate-puk" data-effect="fade" data-delay="1s">
							<div class="b_facts-item__number">
								<span class="counter"><?php echo carbon_get_theme_option('crb_facts_years') ?></span>
							</div>
							<div class="b_facts-item__text">
								лет на рынке
							</div>
						</div>
						<div class="b_facts-item animate-puk" data-effect="fade" data-delay="1.2s">
							<div class="b_facts-item__number">
								<span class="counter"><?php echo carbon_get_theme_option('crb_facts_projects') ?></span>
							</div>
							<div class="b_facts-item__text">
								завершенных проекта
							</div>
						</div>
						<div class="b_facts-item animate-puk" data-effect="fade" data-delay="1.4s">
							<div class="b_facts-item__number">
								<span class="counter"><?php echo carbon_get_theme_option('crb_facts_earn') ?></span> &#8372;
							</div>
							<div class="b_facts-item__text">
								заработали для клиентов
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10">
					<div class="b_facts-description animate-puk" data-effect="fade" data-delay="1.6s">
						<?php echo carbon_get_theme_option('crb_facts_text') ?>
					</div>
					<a href="<?php echo carbon_get_theme_option('crb_facts_link') ?>">
						<div class="esco-button animate-puk" data-effect="fade" data-delay="1.7s">
							Подробнее
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="clients">
	<div class="b_clients puk-slide" data-section-name="light">
		<div class="container">
			<div class="row">
				<?php
				$custom_query_clients = new WP_Query( array( 'post_type' => 'clients', 'posts_per_page' => 7,) );
				if ($custom_query_clients->have_posts()) : while ($custom_query_clients->have_posts()) : $custom_query_clients->the_post(); ?>
					<div class="col-md-4 b_clients-col">
						<div class="animate-puk" data-effect="fade" data-delay="<?php echo $delay_i ?>s">
							<a href="<?php echo get_permalink(); ?>">
								<div class="b_clients-col-item">
									<div class="b_clients-icon">
										<img src="<?php echo carbon_get_the_post_meta('crb_client_icon') ?>" alt="">
									</div>
									<div class="b_clients-text">
										<?php the_title(); ?>
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="p-absolute">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="b_clients-detail">
							<img src="<?php bloginfo('template_url') ?>/img/clients-detail.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="news">
	<div class="b_news puk-slide" data-section-name="light">
		<div class="container">
			<div class="row">
				<?php
				$custom_query_news = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => 5,) );
				if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
					<div class="col-md-4">
						<div class="b_news-block animate-puk" data-effect="fade" data-delay="0.8s">
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
					<?php
					if (($custom_query_news->current_post + 1) === ($custom_query_news->post_count)): ?>
						<div class="col-md-4">
							<div class="b_news-morebutton">
								<a href="<?php echo home_url(); ?>/news">
									<div class="esco-button">
										Посмотреть все новости
									</div>	
								</a>
							</div>
						</div>
					<?php endif; ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="b_news-detail">
				<img src="<?php bloginfo('template_url') ?>/img/news-detail.png" alt="">
			</div>
	</div>
</section>

<section id="contact">
	<div class="b_contact puk-slide" data-section-name="light">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-4">
					<div class="b_contact-text animate-puk" data-effect="fade" data-delay="0.7s">
						Если у вас есть вопросы, будем рады помочь
					</div>
					<div class="b_contact-info animate-puk" data-effect="fade" data-delay="0.8s">
						<div class="b_contact-small">
							по телефону
						</div>
						<div class="b_contact-subtitle">
							<?php
							$phones = carbon_get_theme_option( 'crb_contact_mails' );
							foreach ( $phones as $phone ): ?>
								<div>
									<a href="tel:<?php echo $phone['crb_contact_mail'] ?>"><?php echo $phone['crb_contact_mail'] ?></a>	
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="b_contact-info animate-puk" data-effect="fade" data-delay="0.9s">
						<div class="b_contact-small">
							ответим на почту
						</div>
						<div class="b_contact-subtitle">
							<?php
							$mails = carbon_get_theme_option( 'crb_contact_mails' );
							foreach ( $mails as $mail ): ?>
								<div>
									<a href="mailto:<?php echo $mail['crb_contact_mail'] ?>"><?php echo $mail['crb_contact_mail'] ?></a>	
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="b_contact-info animate-puk" data-effect="fade" data-delay="1s">
						<div class="b_contact-small">
							угостим кофе в офисе
						</div>
						<div class="b_contact-subtitle">
							<?php echo carbon_get_theme_option('crb_contact_address') ?>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="animate-puk" data-effect="fade" data-delay="1.2s">
						<div class="b_contact-map">
							<?php echo carbon_get_theme_option('crb_contact_map') ?>
						</div>
						<div class="b_contact-circle"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>