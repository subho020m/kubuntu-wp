<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( '<div class="h2-wrap">
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="standard-block">News</h2>
</div>
</div>
</div>
</div>', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
