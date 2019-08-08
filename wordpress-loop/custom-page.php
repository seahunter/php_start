<?php 
/**
 * Template name: Custom page
 */
get_header(); ?>

	<!-- Начало основного цикла -->
	<?php if( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post() ?>
			<h1><?php the_title() ?></h1>  <!-- Функция для получения заголовка поста -->
			<?php the_content() ?> <!-- Функция для получения контента страницы -->
			<div class="page-date"><?php the_time('d.m.Y H:i') ?></div> <!-- Функция для получения даты и времени публикации -->
			<a href="<?php echo get_permalink() ?>">Читать далее</a> <!-- Функция для получения ссылки на эту страницу -->
		<?php endwhile ?>
	<?php endif ?>
	<!-- Конец основного цикла -->

	<?php 
		$categories = get_categories(array(
			'number' => 5
		));
	?>

	<?php if( ! empty( $categories ) ) : ?>
		<ul>
			<?php foreach ($categories as $key => $cat) : ?>
				<li><a href="<?php echo '?cat=' . $cat->term_id ?>"><?php echo $cat->name ?></a></li>
			<?php endforeach ?>
		</ul>
	<?php endif ?>

	<?php 
		$blogs_args = array(
			'post_type' => 'post',
			'posts_per_page' => 10,
			'post_status' => 'publish',
			'cat' => $_GET['cat'],
		);

		$blogs = new WP_Query( $blogs_args );

		if( $blogs->have_posts() ) :
			while( $blogs->have_posts() ) : $blogs->the_post();
				get_template_part( 'template-parts/preview/content', get_post_type() );
			endwhile;
			the_posts_pagination();
			wp_rest_postdata();
		endif;
	?>

<?php get_footer();
