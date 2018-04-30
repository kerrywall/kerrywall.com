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
		<p>I'm a web developer, web manager, web writer, web-accessibilty enthusiast, and generally a web fan. I first dabbled in code in 1999, while in high school, and have had web-centric jobs at Ryerson University, CBC News and, currently, the Toronto Symphony Orchestra. I have more than 10 years of professional web experience in the areas listed above.</p>
	</div><!-- #primary -->
	<div class="work">
		<h2>work</h2>
		<p>Lorem ipsum dolor sit amet, <a href="#">consectetur adipisicing elit</a>. Repudiandae praesentium similique ut aut odio cupiditate unde aliquid tempora expedita, porro eveniet quidem! Ea recusandae tempora iste illo quidem at voluptate!</p>
	</div>
	<div class="projects">
		<h2>projects</h2>
		<?php

		// The Query
		$args = array(
			'post_type' => array( 'portfolio' )
		);
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				echo '<div class="project">';
				$the_query->the_post();
				echo '<img src="http://placecorgi.com/600/300">';
				echo '</div>';
			}
			
			/* Restore original Post Data */
			wp_reset_postdata();
		} else {
			// no posts found
		} ?>
	</div>
	<div class="freelance">
		<h2>get in touch</h2>
		<p>I'm available to discuss freelance web projects, and can be reached at <a href="mailto:kw@kerrywall.com">kw@kerrywall.com</a>.</p>
	</div>

<?php
get_footer();
