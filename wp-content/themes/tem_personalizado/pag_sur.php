<?php
/*
Template Name: Plantilla para entradas del sur
*/

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
//while(have_posts()) : the_post();

$argumentos = array(
'post_type' => 'sur',
'posts_per_page' => -1,
'orderby' => 'date',
'order' => 'DESC',
);

$entradas_sur = new WP_Query($argumentos);

while($entradas_sur -> have_posts()) : $entradas_sur -> the_post();

?>
<div style = "width:45%; margin-left:27.5%;">
<?php

?> <a href = "<?php the_permalink(); ?>"><?php the_title("<h2>", "</h2>"); ?></a>

<?php
the_post_thumbnail();

the_excerpt(); ?>

<!-- Agregamos algunos campos visibles de las peliculas -->
    <h3>Minima: <?php the_field("minima");  ?></h3>
    <h3>Maxima: <?php the_field("maxima"); ?></h3>

<a href = "<?php the_permalink(); ?>">Leer mas...</a>

<hr>
</div>

<?php 
endwhile; wp_reset_postdata();

get_footer();

