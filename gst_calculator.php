<?php
/**
 * Plugin Name: GST/HST Calculator
 * Description: GST/HST Calculator
 * Plugin URI: https://wefin.ca/
 * Author: GST/HST Calculator develop by Rashed khan
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html 
 */

if ( ! defined('ABSPATH')) exit;  // if direct access 

require_once 'assets_load.php'; 
require_once 'alberta-sales-tax.php'; 
require_once 'bc-sales-tax.php';  
require_once 'Manitoba_sales_tax.php';  
require_once 'New_brunwick.php';  
require_once 'Newfoundland-Labrador-Sales-Tax.php';
require_once 'Nova-scotia.php';
require_once 'Ontario_tax.php';
require_once 'Prince-Edward-Island.php';
require_once 'quebec-sales.php';
require_once 'Saskatchewan-Sales-Tax.php';
require_once 'gst_hst_propertysetting.php';


final class Gstcalculator
{

    const version = '1.0';

    function __construct(){

    $this->gst_define_constants();

    register_activation_hook( GST_CALCULATOR_FILE, [ $this, 'gst_assets_activate' ] ); // plugin activation

    add_action( 'plugins_loaded', [ $this, 'gst_init_plugin' ] );  // load plugin
}

 /**
     * Define the required plugin constants
     *
     * @return void
     */ 
  
     public function gst_define_constants() {
        define( 'GST_CALCULATOR_VERSION', self::version );
        define( 'GST_CALCULATOR_FILE', __FILE__ );
        define( 'GST_CALCULATOR_ASSETS_PATH', __DIR__ );
        define( 'GST_CALCULATOR_ASSETS_URL', plugin_dir_url( __FILE__  ) );
    }  


    public function gst_init_plugin() {

        new gsthstsetting();
        new gstassetsload();     //load assest       
        new Albertagst();       //Albert assets
        new bcsalegst();       //Albert assets
        new Monitobagst();    // Monitoba assets
        new NewBrunwickgst(); // New Brunwickgst assets
        new Newfoundlandgst(); // New Foundland assets
        new Novagst();         // New Nova Scotia assets
        new OntarioProprgst(); // ontario assets
        new PrinceEdgst();    // Prience Edword assets
        new qubictaxgst();    // quebec-sales
        new sasktchewangst();

    }

    /**
     * Plugin Activatoin Hook
     */  
     
    public function gst_assets_activate() {

    $installed = get_option( 'gst_installed' );

     if ( ! $installed ) {
        update_option( 'gst_installed', time() );
    }

    update_option( 'gst_assets_version', GST_CALCULATOR_VERSION );
    } 

 } 
     /**
     * Create a class instance
     */  
 new Gstcalculator(); 

 /*==== END THE class ===== */ 