<?php
/**
 * Alera Theme Customizer
 *
 * @package Alera
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function alera_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    // TOP BAR SETTINGS
    $wp_customize->add_panel('top_bar',array(
        'title'=> __('Top Bar', 'alera'),
        'priority'=> 10,
    ));
    $wp_customize->add_section( 'contact_details' , array(
        'title'      => __('Contact Details', 'alera'),
        'priority'   => 11,
        'panel'      => 'top_bar'
    ) );
    $wp_customize->add_section( 'social_icons' , array(
        'title'      => __('Social Icons', 'alera'),
        'priority'   => 12,
        'panel'      => 'top_bar'
    ) );
    $wp_customize->add_setting( 'phone_number' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_sanitize_number_absint'
    ) );
    $wp_customize->add_setting( 'email_id' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_sanitize_email'
    ) );
    $wp_customize->add_setting( 'twitter_username' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_sanitize_html'
    ) );
    $wp_customize->add_setting( 'facebook_username' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_sanitize_html'
    ) );
    $wp_customize->add_setting( 'instagram_username' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_sanitize_html'
    ) );
    $wp_customize->add_setting( 'youtube_channel_url' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_sanitize_html'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone_number', array(
        'label'        => __('Phone Number', 'alera'),
        'type'      =>  'number',
        'section'    => 'contact_details',
        'settings'   => 'phone_number'
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_id', array(
        'label'        => __('Email', 'alera'),
        'type'      =>  'email',
        'section'    => 'contact_details',
        'settings'   => 'email_id',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_username', array(
        'label'        => __('Twitter Username', 'alera'),
        'type'      =>  'text',
        'section'    => 'social_icons',
        'settings'   => 'twitter_username',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_username', array(
        'label'        => __('Facebook Username', 'alera'),
        'type'      =>  'text',
        'section'    => 'social_icons',
        'settings'   => 'facebook_username',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_username', array(
        'label'        => __('Instagram Username', 'alera'),
        'type'      =>  'text',
        'section'    => 'social_icons',
        'settings'   => 'instagram_username',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_channel_url', array(
        'label'        => __('YouTube Channel URL', 'alera'),
        'type'      =>  'text',
        'section'    => 'social_icons',
        'settings'   => 'youtube_channel_url',
    ) ) );

    // FEATURED AREA SETTINGS
    $wp_customize->add_section( 'featured_area' , array(
        'title'      => __('Featured Area', 'alera'),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'featured_area_heading' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_sanitize_html'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_area_heading', array(
        'label'        => __('Heading', 'alera'),
        'type'      =>  'text',
        'section'    => 'featured_area',
        'settings'   => 'featured_area_heading',
    ) ) );
    $wp_customize->add_setting( 'featured_area_description' , array(
        'default'     => '',
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_sanitize_html'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'featured_area_description', array(
        'label'        => __('Description', 'alera'),
        'type'         => 'textarea',
        'section'    => 'featured_area',
        'settings'   => 'featured_area_description',
    ) ) );
    $wp_customize->add_setting( 'featured_area_background_image' , array(
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_sanitize_image'
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_area_background_image', array(
        'label'        => __('Background Image', 'alera'),
        'type'         => 'upload',
        'section'    => 'featured_area',
        'settings'   => 'featured_area_background_image',
    ) ) );


    // FOOTER SETTINGS
    $wp_customize->add_section( 'footer' , array(
        'title'      => __('Footer', 'alera'),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'copyright_text' , array(
        'default'     => __('(c) 2021 - All rights reserved. Theme by Mobeen Abdullah', 'alera'),
        'transport'   => 'refresh',
        'sanitize_callback'    => 'alera_sanitize_html'
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'copyright_text', array(
        'label'        => __('Copyright Text', 'alera'),
        'type'         => 'textarea',
        'section'    => 'footer',
        'settings'   => 'copyright_text',
    ) ) );

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'alera_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'alera_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'alera_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function alera_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function alera_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function alera_customize_preview_js() {
	wp_enqueue_script( 'alera-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'alera_customize_preview_js' );
