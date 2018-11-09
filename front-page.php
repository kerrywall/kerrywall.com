<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kw
 */

get_header(); ?>

	<div id="primary" class="about">
		<h2>hi</h2>
		<p>I'm a web developer, web manager, web writer, web-accessibilty enthusiast, and generally a web fan. I first dabbled in code in 1999, while in high school.</p>
		<p>I have more than 10 years of professional web experience in the areas listed above, as well as a journalism degree (with a major in print) from Ryerson University. I completed a certificate in digital media skills from OCAD University in 2012, and HackerYou's full-time front-end development bootcamp in 2014.</p>
		<p>I'm also a runner, knitter, and amateur pianist. I'm available for freelance web development and/or consulting.</p>
	</div><!-- #primary -->
	<div class="projects">
		<h2>projects</h2>
		<p>These are a mix of professional undertakings and personal code experiments.</p>
		<?php

		// The Query
		$args = array(
			'post_type' => array( 'portfolio' )
		);
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				echo '<div class="project clearfix">';
				$the_query->the_post();
				echo '<a href="' . get_the_permalink($the_query->post->ID) . '"><div class="image">'; ?>
				<img src="<?php the_post_thumbnail_url(array(400, 400)); ?>"/>
				<?php echo '</div>';
				echo '<h3>' . get_the_title($the_query->post->ID) . '</h3>';
				echo '</a></div>';
			}
			
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		} ?>
	</div>
	<div class="freelance">
		<h2>get in touch</h2>
		<p>I'm available to discuss freelance web projects, and can be reached at <a href="mailto:kw@kerrywall.com">kw@kerrywall.com</a>, on <a href="https://www.linkedin.com/in/kerry-wall-1bb4304/" target="_blank">LinkedIn</a>, and on <a href="https://twitter.com/kerrywall" target="_blank">Twitter</a>.</p>
	</div>

<?php
get_footer();