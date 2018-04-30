<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="image clearfix">
			<?php echo get_the_post_thumbnail(); ?>	
		</div>
		<p class="summary"><?php echo get_field('description'); ?></p>
		<?php the_content(); ?>	
		<p class="link"><a href="<?php echo get_field('url') ?>" target="_blank">Visit <?php echo get_the_title(); ?></a>.</p>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
