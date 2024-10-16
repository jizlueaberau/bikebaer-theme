<?php
/**
 * Main Theme template
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page
 * 
 * @package bikebaer
 *  @since 1.0
 */
	get_header();
?>

	<!-- index.php -->
	<section id="content" role="main">
		<div class="container">
				<div class="row">
					<div class="col">

					<?php
						the_content();
					?>
					</div>
				</div>
			</div>
	</section><!-- /content -->

<?php
	get_footer();
?>