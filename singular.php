<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>

<!-- Wrapper -->
<div id="wrapper">

	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="inner">
			<h1 class="major"><?php the_title() ?></h1>
			<span class="image fit"><img src="<?= get_the_post_thumbnail_url() ?>" alt="" /></span>
			<strong>Preparation time: </strong> <?= get_field("preparation_time") ?>
			<h2>Ingredients</h2>
			<?= get_field("ingredients") ?>
			<?php the_content() ?>
		</div>
	</section>

</div>

<?php
get_footer();
