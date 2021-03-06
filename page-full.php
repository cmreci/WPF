<?php /* Template Name: Full Width */
get_header(); ?>
<!-- page-full.php -->
	<section class="row" role="document">
		<!-- Row for main content area -->
		<div class="large-12 columns" role="main">
		
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php wpf_entry_meta(); ?>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'wpf'), 'after' => '</p></nav>' )); ?>
					<?php wpf_tags('<p>', '</p>'); ?>
				</footer>
				<div class="row">
					<div class="large-10 large-centered columns">
						<?php comments_template(); ?>
					</div>				
				</div>
			</article>
			<?php endwhile; // End the loop ?>
		</div> <!-- end .large-12.columns -->
		<hr>
	</section>

<?php get_footer(); ?>
<!-- end page-full.php -->