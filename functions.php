<?php

function custom_theme_support() {
  add_theme_support("title-tag");
}
add_action("after_setup_theme", "custom_theme_support");

function custom_register_styles() {
  $version = wp_get_theme()->get("Version");
  wp_enqueue_style("trialtheme-style", get_template_directory_uri() . "/style.css", array("trialtheme-bootstrap"), $version, "all");
  wp_enqueue_style("trialtheme-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
  wp_enqueue_style("trialtheme-fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}
add_action("wp_enqueue_scripts", "custom_register_styles");

function custom_register_scripts() {
  wp_enqueue_script("trialtheme-jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
  wp_enqueue_script("trialtheme-popper", "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.16", true);
  wp_enqueue_script("trialtheme-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.1", true);
  wp_enqueue_script("trialtheme-script", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);
}
add_action("wp_enqueue_scripts", "custom_register_scripts");
