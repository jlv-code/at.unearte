	<?php get_header(); ?>
		<div class="breadcrumb">
			<?php the_breadcrumb(); ?>
		</div>
		<div class="single-entry">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="entry">
				<header class="header-entry">
					<h1><?php the_title(); ?></h1>
				</header>
				<section class="section-entry">
						<?php the_post_thumbnail('medium'); ?>
						<?php the_content(); ?>

				</section>
				<footer class="footer-entry">
					<div class="categories-entry"><span>Categorías </span> <?php the_category(); ?></div>
					<div class="tags-entry"><span>Etiquetas </span><?php the_tags('',' ',''); ?></div>
				</footer>
			</article>
		<?php endwhile; endif; ?>
		</div>

		<aside class="sidebar">
			<?php dynamic_sidebar('home-sidebar'); ?>
		</aside>
		
	<?php get_footer(); ?>
