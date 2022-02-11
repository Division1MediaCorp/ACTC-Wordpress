<?php

/*-----------------------------------------------------------------------------------*/
/* REDUX - speciable */
/*-----------------------------------------------------------------------------------*/

// editor style

add_action( 'init', 'citygov_add_editor_styles' );
function citygov_add_editor_styles() {
	$font_url = add_query_arg( 'family', urlencode( 'Nunito:400,700,400italic,700italic,|Poppins:600,400,700,500&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
 	add_editor_style(  array($font_url, 'styles/reduxfall.css') );
}

// detect plugin 
if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
} else {
	
	function citygov_enqueue_reduxfall() {
		
		// Redux fallback
		wp_enqueue_style('reduxfall', get_template_directory_uri() . '/styles/reduxfall.css');
	
		// google link
		function tmnf_fonts_url() {
			$font_url = '';
			if ( 'off' !==  esc_attr_x( 'on', 'Google font: on or off','citygov')) {
				$font_url = add_query_arg( 'family', urlencode( 'Nunito:400,700,400italic,700italic,|Poppins:600,400,700,500&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
			}
			return $font_url;
		}
		wp_enqueue_style( 'tmnf-fonts', tmnf_fonts_url(), array(), '1.0.0' );
		
	}
	add_action( 'wp_enqueue_scripts', 'citygov_enqueue_reduxfall' );
	
}



// one click import - detect plugin 
if ( class_exists( 'OCDI_Plugin' ) ) {

function tmnf_import_files() {
  return array(
  
  
  	// DEFAULT
    array(
      'import_file_name'           => 'Default Demo',
      'import_file_url'            => 'http://capethemes.com/docs/citygov/import/citygov.xml',
      'import_widget_file_url'     => 'http://capethemes.com/docs/citygov/import/citygov-widgets.wie',
      'import_redux'               => array(
        array(
          'file_url'    => 'http://capethemes.com/docs/citygov/import/citygov-redux.json',
          'option_name' => 'themnific_redux',
        ),
      ),
      'import_preview_image_url'   => 'http://capethemes.com/docs/citygov/import/citygov-screenshot.jpg',
      'preview_url'                => 'http://dannci.wpmasters.org/citygov/',
    ),
	
	
	
  	// MODERN
    array(
      'import_file_name'           => 'Modern Demo',
      'import_file_url'            => 'http://capethemes.com/docs/citygov/import/modern/citygov-modern.xml',
      'import_widget_file_url'     => 'http://capethemes.com/docs/citygov/import/modern/citygov-modern-widgets.wie',
      'import_redux'               => array(
        array(
          'file_url'    => 'http://capethemes.com/docs/citygov/import/modern/citygov-modern-redux.json',
          'option_name' => 'themnific_redux',
        ),
      ),
      'import_preview_image_url'   => 'http://capethemes.com/docs/citygov/import/modern/citygov-modern-screenshot.jpg',
      'preview_url'                => 'http://dannci.wpmasters.org/citygov/modern/',
    ),
	
	
	
	
	
  	// political
    array(
      'import_file_name'           => 'Political Demo',
      'import_file_url'            => 'http://capethemes.com/docs/citygov/import/political/citygov-political.xml',
      'import_widget_file_url'     => 'http://capethemes.com/docs/citygov/import/political/citygov-political-widgets.wie',
      'import_redux'               => array(
        array(
          'file_url'    => 'http://capethemes.com/docs/citygov/import/political/citygov-political-redux.json',
          'option_name' => 'themnific_redux',
        ),
      ),
      'import_preview_image_url'   => 'http://capethemes.com/docs/citygov/import/political/citygov-political-screenshot.jpg',
      'preview_url'                => 'http://capethemes.com/demo/citygov5/political/',
    ),
	
	
	
  	// DISTRICT
    array(
      'import_file_name'           => 'District Demo',
      'import_file_url'            => 'http://capethemes.com/docs/citygov/import/district/citygov-district.xml',
      'import_widget_file_url'     => 'http://capethemes.com/docs/citygov/import/district/citygov-district-widgets.wie',
      'import_redux'               => array(
        array(
          'file_url'    => 'http://capethemes.com/docs/citygov/import/district/citygov-district-redux.json',
          'option_name' => 'themnific_redux',
        ),
      ),
      'import_preview_image_url'   => 'http://capethemes.com/docs/citygov/import/district/citygov-district-screenshot.jpg',
      'preview_url'                => 'http://dannci.wpmasters.org/citygov/district',
    ),
	
	
	
  	// ASSOCIATION
    array(
      'import_file_name'           => 'Association Demo',
      'import_file_url'            => 'http://capethemes.com/docs/citygov/import/association/citygov-association.xml',
      'import_widget_file_url'     => 'http://capethemes.com/docs/citygov/import/association/citygov-association-widgets.wie',
      'import_redux'               => array(
        array(
          'file_url'    => 'http://capethemes.com/docs/citygov/import/association/citygov-association-redux.json',
          'option_name' => 'themnific_redux',
        ),
      ),
      'import_preview_image_url'   => 'http://capethemes.com/docs/citygov/import/association/citygov-association-screenshot.jpg',
      'preview_url'                => 'http://dannci.wpmasters.org/citygov/civic-association',
    ),
	
	
	
	
	
	// END OF ARRAY
	
  );
}
add_filter( 'pt-ocdi/import_files', 'tmnf_import_files' );


function tmnf_after_import_setup() {
    $main_menu = get_term_by( 'name', 'Header menu', 'nav_menu' );
    $addi_menu = get_term_by( 'name', 'Quick Links', 'nav_menu' );
    $bottom_menu = get_term_by( 'name', 'Footer menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id,
            'add-menu' => $addi_menu->term_id,
            'bottom-menu' => $bottom_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'News' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'tmnf_after_import_setup' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

}

/*-----------------------------------------------------------------------------------*/
/* THE END */
/*-----------------------------------------------------------------------------------*/
?>