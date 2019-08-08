<h1><?php the_title() ?></h1>  <!-- Функция для получения заголовка поста -->
<img src="<?php echo get_the_post_thumbnail_url( get_the_id(), 'medium' ) ?>" alt=""> <!-- Получение миниатюры записи -->
<?php the_content() ?> <!-- Функция для получения контента страницы -->
<div class="page-date"><?php the_time('d.m.Y H:i') ?></div> <!-- Функция для получения даты и времени публикации -->
<a href="<?php echo get_permalink() ?>">Читать далее</a> <!-- Функция для получения ссылки на эту страницу -->