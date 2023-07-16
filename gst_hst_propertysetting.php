<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

/**
 *  setting page
 */

/**
 * 
 */
class gsthstsetting 
{
    
  function __construct()
  {
    add_action('admin_menu',  [ $this, 'gst_hst_list' ]);
  }


  function gst_hst_list(){

  add_menu_page(
            __('Gst Hst Property','gst-assets'), //Page title
            __('Gst Hst Property','gst-assets'), //Menu title
            'manage_options', //capability
            'gst-setting', //menu_slug
            array($this, 'gst_hst_property'), //callback function
            'dashicons-admin-settings' //icon url
        );
    }
      
   
    function gst_hst_property(){

     echo "<h2>" . __( 'Canada GST/HST Calculator', 'gst-hst-assets' ) . "</h2>";  

     echo "<div> Alberta Sales Tax (GST) Calculator 2022 : [show_alberto_gst] </div></br>";

     echo "<div> BC Sales Tax (GST & PST) Calculator 2022 : [show_bctax_gst] </div></br>";

     echo "<div> Manitoba Sales Tax (GST & RST) Calculator 2022: [show_monitoba_gst] </div></br>";

     echo "<div> New Brunswick Sales Tax (HST) Calculator 2022 : [show_newbrunwick_gst] </div></br>";

     echo "<div> Newfoundland and Labrador Sales Tax (HST) Calculator 2022 : [show_Newfound_gst] </div></br>";

     echo "<div> Nova Scotia Sales Tax (HST) Calculator 2022 : [show_novascotia_gst] </div></br>";

     echo "<div> Ontario Sales Tax (HST) Calculator 2022 : [show_ontario_gst] </div></br>";

     echo "<div> Prince Edward Island Sales Tax (HST) Calculator 2022 [show_princeedward_gst] </div></br>";

     echo "<div> Quebec Sales Tax (GST & QST) Calculator 2022 [show_quebic_gst]</div></br>";

     echo "<div> Saskatchewan Sales Tax (GST & PST) Calculator 2022 [show_sasktchawan_gst]</div></br>";

    }


}      