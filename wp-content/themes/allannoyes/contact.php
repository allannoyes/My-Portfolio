<?php
/* Template Name: Contact */

	get_header();

?>

		<div class="contact-grid-container">
			<div class="name">
				<img src="<?php echo get_stylesheet_directory_uri() . '/img/AllanNoyes.svg' ?>" alt="Allan Noyes" />
			</div>
			<div class="hero-light ">
			</div>
			<div class="hero-dark">
				<div class="contact">
					<div class="contact-info">
						<div class="contact-item">
							<a href="mailto:me@allannoyes.com">
								<img src="<?php echo get_stylesheet_directory_uri() . '/img/Email-Icon.svg' ?>" alt="Email Icon" class="contact-icon"/>
								<div class="contact-type">
									<h2>Email</h2>
									<p>me@allannoyes.com</p>
								</div>
							</a>
						</div>
						<div class="contact-item">
							<a href="tel:1-507-828-7751">
								<img src="<?php echo get_stylesheet_directory_uri() . '/img/Phone-Icon.svg' ?>" alt="Phone Icon" class="contact-icon"/>
								<div class="contact-type">
									<h2>Phone</h2>
									<p>507-828-7751</p>
								</div>
							</a>
						</div>
					</div>
					<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();

								the_content();
								//
								// Post Content here
								//
							endwhile; // end while
						endif; // end if
					?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
