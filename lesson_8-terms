<?php 
	$dishes_terms = get_terms(array(
		'taxonomy' => 'dishes-type',
		'hide_empty' => false
	));
?>
<ul>
	<?php foreach ($dishes_terms as $value): ?>
		<li><a href="<?php echo get_term_link( $value, 'dishes-type' ) ?>"><?php echo $value->name ?></a></li>
	<?php endforeach ?>
</ul>

<?php 
	$dishes_args = array(
		'post_type' => 'dishes',
		'posts_per_page' => -1,
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'volume',
				'fields' => 'slug',
				'terms' => array( 'big', 'small' )
			),
			array(
				'taxonomy' => 'dishes-type',
				'field' => 'slug',
				'terms' => array( 'обед', 'ужин' )
			)
		)
	);

	$dishes = new WP_Query( $dishes_args );
?>
<?php if( $dishes->have_posts() ) :  ?>
	<?php while( $dishes->have_posts() ) : $dishes->the_post() ?>
		<h2><?php the_title() ?></h2>
		<?php 
			$dishes_post_terms = wp_get_post_terms( get_the_id(), 'dishes-type', array(
				'fields' => 'names'
			) );
		?>
		<ul>
			<?php foreach ($dishes_post_terms as $value): ?>
				<li><?php echo $value ?></li>
			<?php endforeach ?>
		</ul>
	<?php endwhile ?>
<?php endif ?>
