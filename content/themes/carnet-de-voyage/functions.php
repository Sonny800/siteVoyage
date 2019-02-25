<?php


// Customizer
require get_theme_file_path('/inc/customizer.php');

// Définition des shortcodes
require get_theme_file_path('/inc/shortcodes.php');

// Theme Enqueue - 'Attachement des fichiers dont on aura besoin' (css, js, react..)
require get_theme_file_path('/inc/theme-enqueue.php');

// Theme Support -> Mise en place du thème
require get_theme_file_path('/inc/theme-support.php');

// CUSTOM POST TYPE PAYS
// require get_theme_file_path('/inc/cpt-pays.php');

require get_theme_file_path('/template/template-inscription.php');

require get_theme_file_path('/template/template-edit-user-profil.php');

// Recuperer le mdp
add_filter( 'login_form_bottom', 'lien_mot_de_passe_perdu' );
function lien_mot_de_passe_perdu( $formbottom ) {
	$formbottom .= '<a href="' . wp_lostpassword_url() . '">Mot de passe perdu ?</a>';
	return $formbottom;
}

function insert_attachment($file_handler,$post_id,$setthumb='false') {
    // check to make sure its a successful upload
    if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) __return_false();

    require_once(ABSPATH . "wp-admin" . '/includes/image.php');
    require_once(ABSPATH . "wp-admin" . '/includes/file.php');
    require_once(ABSPATH . "wp-admin" . '/includes/media.php');

    $attach_id = media_handle_upload( $file_handler, $post_id );

    if ($setthumb) update_post_meta($post_id,'_thumbnail_id',$attach_id);
    return $attach_id;
}
