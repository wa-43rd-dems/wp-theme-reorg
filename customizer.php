<?php
function reorg_customize_register($wp_customize) {
    $wp_customize->add_setting('site_description', array(
        'type' => 'theme_mod',
        'default' => 'Welcome to our website!',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'site_description',
            array(
                'section' => 'title_tagline',
                'label' => 'Site Description',
                'description' => 'This text is displayed at the top of the front page.',
                'type' => 'textarea'
            )
        )
    );
}

add_action('customize_register', 'reorg_customize_register');
?>
