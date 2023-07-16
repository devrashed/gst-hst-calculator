<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

final class OntarioProprgst{

function __construct(){

	  add_shortcode('show_ontario_gst', [$this, 'ontariotax']);
}

 function ontariotax(){
 
?>

  <h2 style="text-align:center;">Ontario Sales Tax (HST) Calculator 2022</h2>

  <div class="gtabs">
      <input type="radio" name="gtabs" id="tabone" checked="checked">
      <label for="tabone">GST Calculator. Before Tax Amount </label>
      <div class="tab">  

        <div class="property-container">    
        
          <div class="gst-col-1 pro_color gtabs-pad">
            <div class="gst_asste"> 
             <div class="gst_title">Amount before taxes</div>
              <input id="ongstvalue" name="ongstvalue" value="100" class="gstfield">
            </div>
            <br>
           

          </div>

       <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">

              <table width="100%">
                <tr>
                  <td></td>
                  <td width="55%">PST (8%)</td>
                  <td width="5%">$</td>
                  <td width="40%" style="text-align:center;"><div class="onpst">7.08</div></td>
                </tr>
                <tr>
                  <td>+</td>
                  <td width="55%">GST (5%)</td>
                  <td width="5%">$</td>
                  <td width="40%" style="text-align:center;"><div class="ongst">4.42</div></td>
                </tr>
                <tr>
                  <td>=</td>
                  <td width="55%">HST(13%)</td>
                  <td width="5%">$</td>
                  <td width="40%" style="text-align:center;"><div class="onsale">11.50</div></td>
                </tr>
              </table>  

            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Total After Taxes</td>
                <td width="5%"> $</td>
                <td width="35%" style="text-align:center;"><div class="ontotal">112.00</div> </td>
              </tr> 

            </table>

         </div>

        </div>
          <div style="clear:both;"></div>
       </div> 

       <div style="clear:both;"></div>
    </div> <!-- END THE container -->

   </div>
 <input type="radio" name="gtabs" id="tabtwo">
 <label for="tabtwo">Reverse GST Calculator . After Tax Amount</label>
 <div class="tab">
      <div class="property-container">   
        
         <div class="gst-col-1 pro_color gtabs-pad">
            <div class="gst_asste"> 
             <div class="gst_title">Total after taxes</div>
              <input id="rnogstvalue" name="rnogstvalue" value="100" class="gstfield">
            </div>
            <br>
          
          </div>

              <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">

             <table width="100%"> 
                <tr>
                   <td></td>
                   <td width="60%">PST (7%)</td>
                   <td width="5%">$</td>
                   <td width="35%" style="text-align:center;"><div class="rnopst"> 6.25</div></td>
                </tr>
                <tr>
                   <td>+</td>
                   <td width="60%">GST (5%)</td>
                   <td width="5%">$</td>
                   <td width="35%" style="text-align:center;"><div class="rnogst">4.46</div></td>
                </tr>
                <tr>
                   <td>=</td>
                   <td width="60%">Sales Taxes (12%)</td>
                   <td width="5%">$</td>
                   <td width="35%" style="text-align:center;"><div class="rnosale">10.71</div></td>
                </tr>
             </tabel> 
             
            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Amount Before Taxes  </td>
                <td width="5%"> $</td>
                <td width="35%"  style="text-align:center;"><div class="rnototal">89.29</div> </td>
              </tr> 

            </table>

         </div>

        </div>
          <div style="clear:both;"></div>
       </div> 

      </div> <!-- container -->
  </div> 

<?php 
 	}
 } /*end the class*/
?>