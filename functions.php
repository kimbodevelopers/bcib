<?php



/* Compile LESS */
function website_scripts() {

$check_server = $_SERVER['HTTP_HOST'];
if ( $check_server == "localhost" ) {
	$site_path = "C:/MAMP/htdocs/bcib/wp-content/themes/bcib/assets"; /**** <<--- CHANGE THIS TO YOUR LOCALHOST FOLDER NAME ****/
} else {
	//<<--- CHANGE THIS TO THE LIVE SITE USERNAME ****/
  $site_path = "/home/kimboagency8627/bcib.kimboagency.com/wp-content/themes/bcib/assets"; /**** <<--- CHANGE THIS TO THE LIVE SITE USERNAME ****/
}

	include( $site_path . '/scripts/php/lessc.inc.php' );
	$inputFile  = $site_path . '/less/styles.less';
	$outputFile = $site_path . '/css/styles.css';

	// load the cache
	$cacheFile = $inputFile.".cache";

	if (file_exists($cacheFile)) {
	    $cache = unserialize(file_get_contents($cacheFile));
	} else {
	    $cache = $inputFile;
	}

	$less = new lessc22;
	$newCache = $less->cachedCompile($cache);

	if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
	    file_put_contents($cacheFile, serialize($newCache));
	    file_put_contents($outputFile, $newCache['compiled']);
	}

}
add_action( 'wp_enqueue_scripts', 'website_scripts' );

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'nav-main-menu'   => 'Main Navigation Menu',
			'nav-sub-menu'   => 'Navigation Sub Menu',
			'footer-personnel-menu' => 'Footer - Personnel Menu',
			'footer-how-menu' => 'Footer - How Menu',
			'footer-more-menu' => 'Footer - More Menu',
			)
	);
}

require get_template_directory() . '/inc/custom-walker-nav-menu.php';

// Activating Classic Editor
add_filter('use_block_editor_for_post', '__return_false');

if(function_exists('acf_add_options_page')) {
	acf_add_options_page();
	acf_add_options_sub_page('Header', array(
		'page_title' => 'Header',
		'menu_title' => 'Header',
		'capability' => 'edit_posts',
		'parent_slug' => 'theme-option',
		'position' => 'false',
		'icon_urol' => 'false',
	));

	acf_add_options_sub_page('Global Assets', array(
		'page_title' => 'Global Assets',
		'menu_title' => 'Global Assets',
		'capability' => 'edit_posts',
		'parent_slug' => 'theme-option',
		'position' => 'false',
		'icon_urol' => 'false',
	));

	acf_add_options_sub_page('Footer', array(
		'page_title' => 'Footer',
		'menu_title' => 'Footer',
		'capability' => 'edit_posts',
		'parent_slug' => 'theme-option',
		'position' => 'false',
		'icon_urol' => 'false',
	));
}
