<?php
/*
Plugin Name: Plugin para agregar usuarios de tipo "redactor"
Plugin URI:
Description: Plugin que agrega usuarios de tipo "redactor" para el proyecto
Version: 1.0
Author: Lucas
Author URI:
License:
*/

$nuevo_rol = add_role(
    "redactor",
    __("Redactor"),
    array(
        "read" => true,
        "edit" => true,
        "delete_posts" => false
    )
);
    
function ocultar_barra_admin(){
    if(current_user_can("administrator")){
        show_admin_bar(true);
    }else{
        show_admin_bar(false);
    }
}
    
add_action("after_setup_theme", "ocultar_barra_admin");

//

function restringir_acceso_admin(){
    if(!current_user_can("manage_options") && (!defined("DOING_AJAX") || !DOING_AJAX)){
        wp_redirect(
            site_url()
        );
        exit;
    }
}

add_action("admin_init", "restringir_acceso_admin");

//

function actualizar_capacidades(){
    $rol = get_role("redactor");
    
    $capacidades = array(
        "edit_other_posts",
        "edit_published_posts",
        "edit_others_pages",
        "edit_published_pages",
        "upload_files"
    );
    foreach($capacidades as $capacidad){
        $rol -> add_cap($capacidad);
    }
    
}
    
add_action("init", "actualizar_capacidades");

//

function mostrar_archivos_del_usuario($query){
    $user_id = get_current_user_id();
    
    if($user_id && !current_user_can("manage_options")){
        $query["author"] = $user_id;
    }

    return $query;
}
    
add_filter("ajax_query_attachments_args", "mostrar_archivos_del_usuario");

?>