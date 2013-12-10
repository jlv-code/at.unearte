	<?php get_header(); ?>
		<div class="breadcrumb">
			<?php the_breadcrumb(); ?>
		</div>
		<div class="entries-search">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="entry">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<!--<div class="content-entry"><?php the_excerpt(); ?></div>-->
				<div class="readmore"><a href="<?php the_permalink(); ?>">Leer más >></a></div>
			</article>
		<?php endwhile; endif; ?>
		<?php atunearte_post_paging(); ?>
		</div>

		<aside class="sidebar">
			<?php dynamic_sidebar('home-sidebar'); ?>
		</aside>
		
	<?php get_footer(); ?>