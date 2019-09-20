<?php
/**
 * Plugin Name: MASHING UP Customizer
 * Version: {release version}
 * Author: Digitalcube
 * Author URI: https://en.digitalcube.jp
 * Text Domain: mashing_up_customizer
 * Domain Path: /languages
 * @package MASHING UP Customizer
 */

class MashingUpCustomizerInit {

	public function __construct() {
		$this->basename        = plugin_basename( __FILE__ );
		$this->plugin_name     = dirname( $this->basename );
		$this->dir             = plugin_dir_path( __FILE__ );
		$this->url             = plugin_dir_url( __FILE__ );
		$headers               = array(
			'name'        => 'Plugin Name',
			'version'     => 'Version',
			'domain'      => 'Text Domain',
			'domain_path' => 'Domain Path',
		);
		$data                  = get_file_data( __FILE__, $headers );
		$this->name            = $data['name'];
		$this->version         = $data['version'];
		$this->domain          = $data['domain'];
		$this->domain_path     = $data['domain_path'];
	}

}

new MashingUpCustomizerSet();
class MashingUpCustomizerSet extends MashingUpCustomizerInit {

	public function __construct() {
		parent::__construct();
		add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ), 0 );
	}

	public function plugins_loaded() {
		load_plugin_textdomain( $this->domain, false, $this->plugin_name . $this->domain_path );
		require_once( $this->dir . 'admin/acf-admin.php' );

		if ( true === function_exists('acf_add_local_field_group') )
			require_once( $this->dir . 'admin/acf-fields.php' );
	}

}
