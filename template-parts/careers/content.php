<?php
/**
 * Template part for displaying a locations content
 *
 * @package senske
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

?>

	<?php
	//
	// Careers CTA.
	//
	get_template_part( 'template-parts/careers/careers_cta', '', $args );
	?>

	<section class="careers-section">
		<header class="section-header">
			<h4 class="small subtitle">A Team Like No Other</h4>
			<h3 class="section-title underlined">The Core Values that Drive Us All</h3>
		</header>
		<div class="career-cards" >
			<article class="career card">
				<header>
					<div class="card-image">
						<img src="https://senske1.wpengine.com/wp-content/uploads/Senske-Safety-Icon.png" alt="">
					</div>
					<h4 class="title">Do it Right! Do it Safe!</h4>
				</header>
				<div class="entry-content">
					<p>We are committed to being the best in all we do; making the right decisions, every time, with excellence, and always while putting safety first.</p>
				</div>
			</article>
			<article class="career card">
				<header>
					<div class="card-image">
						<img src="https://senske1.wpengine.com/wp-content/uploads/Senske-Teamwork-Icon.png" alt="">
					</div>
					<h4 class="title">Teamwork</h4>
				</header>
				<div class="entry-content">
					<p>Senske Services provides quality lawn care services in Provo and the surrounding area. Contact our professional lawn maintenance technicians to take over your lawn care so you can get back to enjoying your yard.</p>
				</div>
			</article>
			<article class="career card">
				<header>
					<div class="card-image">
						<img src="https://senske1.wpengine.com/wp-content/uploads/Senske-Drive-for-Success-Icon.png" alt="">
					</div>
					<h4 class="title">Drive For Results</h4>
				</header>
				<div class="entry-content">
					<p>We are accountable in our quest of achieving and exceeding our business goals and keeping our promises to our customers, communities, and each other.</p>
				</div>
			</article>
			<article class="career card">
				<header>
					<div class="card-image">
						<img src="https://senske1.wpengine.com/wp-content/uploads/Senske-Growth-Icon.png" alt="">
					</div>
					<h4 class="title">Dedicated To Growth</h4>
				</header>
				<div class="entry-content">
					<p>Looking forward to the future for opportunities to grow and build our business while remaining committed to building our people alongside it, developing the leaders of tomorrow.</p>
				</div>
			</article>
		</div>
		<p style="text-align: center;">
			<a href="https://recruiting2.ultipro.com/SEN1005SLTC/JobBoard/b5250c8f-aa19-4791-b683-9274c3dd4bdf/?q=&o=postedDateDesc&w=&wc=&we=&wpst=" class="button" >Apply for a Career Now!</a>
		</p>
	</section>

	<section class="career-section process lifted fullwidth">
		<header class="section-header">
			<h3 class="section-title underlined">Our Hiring Process</h3>
		</header>
		<p style="text-align: center;">We've simplified our hiring process into five easy steps. Use them to join the Senske Family!</p>
		<div class="column-container process-icons">
			<div class="column size-1 process-icon">
				<div class="icon-wrap">
					<img src="https://senske1.wpengine.com/wp-content/uploads/Senske-career-exploration.png" alt="">
				</div>
				<h4>Choose a Career Opportunity</h4>
			</div>
			<div class="column size-1 process-icon">
				<div class="icon-wrap">
					<img src="https://senske1.wpengine.com/wp-content/uploads/Senske-Fill-out-an-application-icon.png" alt="">
				</div>
				<h4>Fill Out an Application</h4>
			</div>
			<div class="column size-1 process-icon">
				<div class="icon-wrap">
					<img src="https://senske1.wpengine.com/wp-content/uploads/senske-speak-with-recruiter-icon.png" alt="">
				</div>
				<h4>Speak With Our Recruiter</h4>
			</div>
			<div class="column size-1 process-icon">
				<div class="icon-wrap">
					<img src="https://senske1.wpengine.com/wp-content/uploads/senske-meet-manager-icon.png" alt="">
				</div>
				<h4>Meet with Our hiring manager</h4>
			</div>
			<div class="column size-1 process-icon">
				<div class="icon-wrap">
					<img src="https://senske1.wpengine.com/wp-content/uploads/Senske-get-hired-icon.png" alt="">
				</div>
				<h4>Get Hired!</h4>
			</div>
		</div>
		<p style="text-align: center;">
			<a href="https://recruiting2.ultipro.com/SEN1005SLTC/JobBoard/b5250c8f-aa19-4791-b683-9274c3dd4bdf/?q=&o=postedDateDesc&w=&wc=&we=&wpst=" class="button" >Start the Simple Process Today!</a>
		</p>
	</section>

	<section class="career-section why-work">
		<header class="section-header">
			<h3 class="section-title underlined">Why Work With Us?</h3>
		</header>
		<?php get_template_part( 'template-parts/acf/flexible', get_post_type(), array( 'row_group' => 'page_blocks' ) ); ?>

	</section>

	<section class="career-section slider lifted fullwidth">
		<header class="section-header">
			<h4 class="small subtitle">Real People Enjoying Real Careers</h4>
			<h3 class="section-title underlined">A Few of Our Amazing Technicians and Employees</h3>
		</header>
		<?php
		if ( have_rows( 'slider' ) ) :
			while ( have_rows( 'slider' ) ) : the_row();
				$args = array(
					'images' =>  get_sub_field( 'images' ),
				);
				get_template_part( 'template-parts/careers/career_slider', '', $args );

			endwhile;
		endif;
		?>
		<p style="text-align: center;">
			<a href="https://recruiting2.ultipro.com/SEN1005SLTC/JobBoard/b5250c8f-aa19-4791-b683-9274c3dd4bdf/?q=&o=postedDateDesc&w=&wc=&we=&wpst=" class="button" >Start the Simple Process Today!</a>
		</p>
	</section>

	<?php
	//
	// Individual Commercial Services.
	//
	get_template_part( 'template-parts/careers/careers_cta_bottom', '', $args );

	?>


<?php
