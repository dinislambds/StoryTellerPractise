<?php

/**
 * Get the bootstrap!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}




add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_KING_KHAN_';

    /**
     * Initiate the metabox
     */
    $event_metabox = new_cmb2_box( array(
        'id'            => 'test_metabox',
        'title'         => __( 'Test Metabox', 'cmb2' ),
        'object_types'  => array( 'event', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $event_metabox->add_field( array(
        'name'       => __( 'Sub Title', 'cmb2' ),
        'desc'       => __( 'Please type your sub-title.', 'cmb2' ),
        'id'         => $prefix . 'sub_title',
        'type'       => 'text',
        'default'	 => 'Lorem',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );


    $event_metabox->add_field( array(
    'name'             => 'Test Select',
    'desc'             => 'Select an option',
    'id'               => $prefix.'image_select',
    'type'             => 'select',    
    'default'          => '1',
    'options'          => array(
        '1' => __( 'Image Left Side', 'cmb2' ),
        '2'   => __( 'Image Right Side', 'cmb2' ),
    ),
	) );





	/******************team member***************/
    $team_metabox = new_cmb2_box( array(
        'id'            => 'team_metabox',
        'title'         => __( 'Team Member Desgination', 'cmb2' ),
        'object_types'  => array( 'team', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $team_metabox->add_field( array(
        'name'       => __( 'Team Member Desgination', 'cmb2' ),
        'desc'       => __( 'Please type your desgination.', 'cmb2' ),
        'id'         => $prefix . 'team_desgination',
        'type'       => 'text',
        'default'	 => 'Lead Developer',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );















}





?>