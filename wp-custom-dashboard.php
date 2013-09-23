<?php
/*
Plugin Name: WordPress Custom Dashboard BoilerPlate
Plugin URI: https://github.com/buooy/wp-custom-dashboard
Description: WordPress Plugin BoilerPlate to create a custom dashboard
Version: 0.1.2
Author: Aaron Lee
Author URI: http://buooy.com
*/

/*******************************************************
 *					Classes 						*
 *******************************************************/
class wp_custom_dashboard {

	//	Variables 
	protected $plugin_url;
	protected $image_url;
	
	protected $parent_slug	=	NULL;
	protected $page_title 	= 	"Dashboard";
	protected $menu_title 	= 	"Dashboard";
	protected $capability 	= 	"read";
	protected $menu_slug 	= 	"dashboard";
	
	// Standard Constructor
	public function __construct()
	{
		$this->plugin_url = plugin_dir_url( __FILE__ );
		$this->image_url = $this->plugin_url.'dashboard/img/';
		
		add_action('admin_menu', array( $this,'wp_set_dashboard') );
		add_action('load-index.php', array( $this,'wp_redirect_dashboard') );
	}

	// add the dashboard to the WordPress
	public function wp_set_dashboard()
	{	
		$page_hook_suffix =	add_submenu_page( 	$this->parent_slug, 
							$this->page_title, 
							$this->menu_title, 
							$this->capability, 
							$this->menu_slug, 
							array( $this,'wp_create_dashboard') );
							
		// Enqueues the script and the styles
		add_action( 'admin_init', array($this, 'custom_dashboard_admin_init') );
		add_action('admin_print_scripts-'.$page_hook_suffix, array($this, 'custom_dashboard_admin_scripts'));
		add_action( 'admin_print_styles-'.$page_hook_suffix, array($this, 'custom_dashboard_admin_styles') );
	}
	
	//  Enqueues the admin scripts and styles
	public function custom_dashboard_admin_scripts()
	{
		wp_enqueue_script( 'custom-dashboard-script' );
	}
	public function custom_dashboard_admin_styles()
	{
		wp_enqueue_style( 'custom-dashboard-style' );
	}
	
	// Initiate the admin custom dashboard
	public function custom_dashboard_admin_init()
	{
		wp_register_script( 'custom-dashboard-script', $this->PLUGIN_URL.'dashboard/js/script.js' );
		wp_register_style( 'custom-dashboard-style', $this->PLUGIN_URL.'dashboard/css/style.css' );
	}
	
	// Creates the dashboard. Look at dashboard.php to change the dashboard look
	public function wp_create_dashboard()
	{
		// WordPress Administration Bootstrap 
		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );
		
		// Custom Dashboard
		include_once( 'dashboard/dashboard.php' );
		
	}
	
	
	// Redirects the user from the default dashboard to the custom dashboard
	public function wp_redirect_dashboard()
	{
		if( is_admin() ) {
			$current_screen = get_current_screen();

			if( $current_screen->base == 'dashboard' ) 
			{
				wp_redirect( admin_url( 'index.php?page='.$this->menu_slug ) );
			}
		}
	}

	
}

/*******************************************************
 *			Create new class 						*
 *******************************************************/
$wp_custom_dashboard = new wp_custom_dashboard;

?>