<?php
/*
Template Name: Plantilla de formulario para colaboradores
*/

/**
 *
 *
 * 
 *
 * 
 * 
 * 
 */

get_header();

?>

<h1>Formulario para noticias</h1>

<div id = "form_colaboradores" style = "width:45%;margin-left:27.5%;">
<form name = "cont_colaboradores" id = "cont_colaboradores" method = "post">

<p style = "margin-bottom:.2rem;"><input type = "text" name = "tit_post" placeholder = "Nombre de la nueva entrada" style = "width:65%;">
</p>

<div style = "margin-bottom:1.3rem;">
<?php
wp_editor(
$post_obj -> post_content,
"userpostcontent",
array("textarea_name" => "contenido_noticia")
);
?>
</div>

<p><input type = "submit" value = "Enviar noticia">
</p>

</form>

</div>

<?php
$noticia = array(
"post_title" => wp_strip_all_tags($_POST["tit_post"]),
"post_content" => $_POST["contenido_noticia"],
"post_type" => "post",
"post_status" => "pending",
"post_author" => $user_id,
);

$nueva_noticia = wp_insert_post($noticia);
?>

<?php
get_footer();
?>