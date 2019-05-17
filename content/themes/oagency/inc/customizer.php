<?php 

function oagency_customize_register( $wp_customize ){
    $wp_customize->add_panel(
        'oagency_theme_configuration',
        [
            'title'    => 'Configuration du thème oAgency',
            'priority' => 1
        ]
    );

    // On gère l'affichage de la section carousel

    $wp_customize->add_section(
        'oagency_carousel',
        [
            'panel' => 'oagency_theme_configuration',
            'title' => 'Carousel'
        ]
    );

    $wp_customize->add_setting( 'oagency_carousel_active' );

    $wp_customize->add_control(
        'oagency_carousel_active', // Si l'ID est identique à celui d'un setting, WP va faire le lien entre les deux automatiquement
        [
            'section' => 'oagency_carousel',
            'type'    => 'checkbox',
            'label'   => 'Activer le carousel'
        ]
    );

    // On gère l'affichage de la section call to action

    $wp_customize->add_section(
        'oagency_calltoaction',
        [
            'panel' => 'oagency_theme_configuration',
            'title' => 'Call to Action'
        ]
    );

    $wp_customize->add_setting( 'oagency_calltoaction_active' );

    $wp_customize->add_control(
        'oagency_calltoaction_active', 
        [
            'section' => 'oagency_calltoaction',
            'type'    => 'checkbox',
            'label'   => 'Activer la section'
        ]
    );

    // Setting du nombre d'article à afficher
    $wp_customize->add_section(
        'oagency_blogposts',
        [
            'panel' => 'oagency_theme_configuration',
            'title' => 'Blog Post'
        ]
    );

    $wp_customize->add_setting( 
        'oagency_blogposts_count', 
        [
            'default' => 6
        ] 
    );

    $wp_customize->add_control(
        'oagency_blogposts_count',
        [
            'section' => 'oagency_blogposts',
            'label'   => 'Nombre d\'articles de blog',
            'type'    => 'number',
            'input_attrs' => [
                'min'  => 0,
                'max'  => 12,
                'step' => 1
            ]
        ]
    );
       
}

add_action( 'customize_register', 'oagency_customize_register'  );