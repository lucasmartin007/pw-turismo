<?php
/*
Template Name: Plantilla para entradas del norte
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


$biom_elegido = $_POST["bioma-norte"];
get_header();

?>

<form method = "post" name = "filtros-norte">
<select name = "bioma-norte" onchange = "this.form.submit();" style = "width:45%;margin-left:27.5%;">
<option value = "">Seleccione un bioma</option>
?>
<option value = ''>Todos</option>

<?php
foreach(get_terms("bioma_norte", array("hide_empty" => false)) as $bioma){
echo "<option value = '" . $bioma -> slug . "'>" . $bioma -> name . "</option>";
}
?>
</select>
</form>

<?php


/* Start the Loop */
//while(have_posts()) : the_post();

$argumentos = array(
'post_type' => 'norte',
'posts_per_page' => 2,
"paged" => get_query_var("paged"),
'orderby' => 'date',
'order' => 'DESC',

'bioma_norte' => $biom_elegido,
);

$entradas_norte = new WP_Query($argumentos);

while($entradas_norte -> have_posts()) : $entradas_norte -> the_post();

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

?>

<div class = "paginacion" style = "text-align:center;">
<?php previous_posts_link("Pagina anterior"); ?> || <?php next_posts_link("Pagina siguiente", $entradas_norte -> max_num_pages); ?>

</div>


<?php

get_footer();

