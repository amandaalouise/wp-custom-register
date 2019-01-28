<?php function userRegisterStyles()
{

    global $post, $wpdb;

       // determine whether this page contains "my_shortcode" shortcode
       $shortcode_found = false;
       if ( has_shortcode($post->post_content, 'cur_pessoa_fisica') || has_shortcode($post->post_content, 'cur_pessoa_juridica')) {
          $shortcode_found = true;
       } else if ( isset($post->ID) ) {
          $result = $wpdb->get_var( $wpdb->prepare(
            "SELECT count(*) FROM $wpdb->postmeta " .
            "WHERE post_id = %d and meta_value LIKE '%%cur_pessoa_%%'", $post->ID ) );
          $shortcode_found = ! empty( $result );
       }

       if ($shortcode_found) {
           wp_register_style('custom-form-css', plugin_dir_url(__FILE__) . '/css/bootstrap.css');
           wp_register_style('chosen-css', plugin_dir_url(__FILE__) . '/css/chosen.min.css');
           wp_register_style('custom-css', plugin_dir_url(__FILE__) . '/css/custom.css');
           wp_register_script('chosen-js', plugin_dir_url(__FILE__) . '/js/chosen.jquery.min.js');
           wp_register_script('custom-js', plugin_dir_url(__FILE__) . '/js/custom.js');

           wp_enqueue_style('custom-form-css');
           wp_enqueue_style('chosen-css');
           wp_enqueue_style('custom-css');
           wp_enqueue_script('chosen-js');
           wp_enqueue_script('custom-js');
       }

}
add_action( 'wp_enqueue_scripts', 'userRegisterStyles' );