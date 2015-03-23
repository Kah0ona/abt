<?php
/*
Template Name: particulie-service-onderhoud
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol8">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
					<div>
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>

				<?php 
					$album = do_shortcode('[ngg_images gallery_ids="3" display_type="photocrati-nextgen_basic_thumbnails"]'); 
				?>

			</div>
			<div class="u-gridCol4">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol12">
				<?php echo $album; 		?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="u-gridRow">
			<div class="u-gridCol12">
				<a href="http://abt-installaties.nl/certificering/" class="Home-cert-image" target="_blank">				
				<img class="imgy-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/okcv.png" />
				</a>
				<img class="imgy-5" src="<?php echo get_stylesheet_directory_uri(); ?>/img/voordelen.jpg" />
			</div>
		</div>
	</div>

<?php get_footer(); ?>
