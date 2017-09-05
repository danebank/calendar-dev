<?php
  function my_theme_enqueue_styles() {

      $parent_style = 'wp-bootstrap-starter-style'; // This is 'wp-bootstrap-starter' for the Twenty Fifteen theme.

      wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
      wp_enqueue_style( 'child-style',
          get_stylesheet_directory_uri() . '/style.css',
          array( $parent_style ),
          wp_get_theme()->get('Version')
      );
      wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,500', false );
      //wp_enqueue_style( 'danebankstyle', get_template_directory_uri() . '-child/custom.css', array(), '1.0.0', 'all');
  }
  add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
