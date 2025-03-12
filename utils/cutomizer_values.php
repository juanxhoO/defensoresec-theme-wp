<?php 

function get_customizer_values() {
    return array(
        'contact_phone'   => get_theme_mod('contact_phone', ''),
        'contact_address' => get_theme_mod('contact_address', ''),
        'contact_email'   => get_theme_mod('contact_email', ''),
        'zip_code'        => get_theme_mod('zip_code', ''),
        'custom_text'     => get_theme_mod('custom_text', ''),
    );
}