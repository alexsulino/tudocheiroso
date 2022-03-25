<?php 
$current_user = wp_get_current_user();
$upload_dir   = wp_upload_dir();
 
if ( isset( $current_user->user_login ) && ! empty( $upload_dir['basedir'] ) ) {
    $user_dirname = $upload_dir['basedir'].'/uploads/alex_pastax'.$current_user->user_login;
        if ( ! file_exists( $user_dirname ) ) {
        wp_mkdir_p( $user_dirname );
    }
}
?>