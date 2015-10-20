<?php
add_action( 'genesis_setup','genesischild_theme_setup' );

function genesischild_theme_setup() {
//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

//* Accessibility support
//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Customizing the graphics 
//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add theme support for custom header
add_theme_support ('genesis-custom-header');
}
