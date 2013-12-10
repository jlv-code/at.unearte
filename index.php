	<?php get_header(); ?>
		<div class="breadcrumb">
			<?php the_breadcrumb(); ?>
		</div>
		<div class="entries">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="entry">
				<header class="header-entry">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				</header>
				<section class="section-entry">
					<div class="categories-entry"><?php the_category(); ?></div>
					<div class="thumbnail-entry"><?php the_post_thumbnail('img-150x150'); ?></div>
					<div class="data">
						<div class="tags-entry"><?php the_tags('',' ',''); ?></div>
						<div class="content-entry"><?php the_excerpt(); ?></div>
					</div>
				</section>
				<footer class="footer-entry">
					<div class="readmore"><a href="<?php the_permalink(); ?>">Leer más</a></div>
				</footer>
			</article>
		<?php endwhile; endif; ?>
		<?php atunearte_post_paging(); ?>
		</div>

		<aside class="sidebar">
			<?php dynamic_sidebar('home-sidebar'); ?>
		</aside>
		
	<?php get_footer(); ?>
