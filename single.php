	<?php get_header(); ?>
	<?php 

		global $post;
		$pid = $post->ID;
		$categories = get_the_category($pid);

		foreach($categories as $cat):
			$cat_name .= $cat->slug.',';
		endforeach;
		$cat_name .= 'destacado';

	?>
	<aside class="single-top">
		<?php $args = array('category_name' => $cat_name, 'post__not_in' => array($pid), 'posts_per_page' => '4'); ?>
		<?php $the_query = new WP_Query($args);	?>
		<?php if ($the_query->have_posts()): ?>
			<ul class="single-top-posts">
			<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
				<li>
					<a href="<?php the_permalink() ?>"><?php if (has_post_thumbnail()) { the_post_thumbnail('img-240x160'); } ?></a>
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</li>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			</ul>
		<?php endif; ?>
		<?php dynamic_sidebar('single-top'); ?>
	</aside>
	<article class="post">
		<?php 
			if (have_posts()):
				while (have_posts()): the_post();
					get_template_part('single-format', get_post_format());
				endwhile;
				proyecto_post_paging();
			endif; 
			wp_reset_postdata();
		?>
	</article>
	<aside class="single-column-right">
		<?php dynamic_sidebar('single-column-right'); ?>
	</aside>
	<?php get_footer(); ?>
