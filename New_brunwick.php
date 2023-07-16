<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

final class NewBrunwickgst{

function __construct(){

	  add_shortcode('show_newbrunwick_gst', [$this, 'Newgsttax']);
}

 function Newgsttax(){
 
?>

 <h2 style="text-align:center;">New Brunswick Sales Tax (HST) Calculator 2022</h2>

  <div class="gtabs">
      <input type="radio" name="gtabs" id="tabone" checked="checked">
      <label for="tabone">GST Calculator. Before Tax Amount</label>
      <div class="tab">  

        <div class="property-container">    
        
          <div class="gst-col-1 pro_color gtabs-pad">
            <div class="gst_asste"> 
             <div class="gst_title">Amount before taxes</div>
              <input id="nbgstvalue" name="nbgstvalue" value="100" class="gstfield">
            </div>
            <br>
          </div>

       <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">

            <table width="100%">
              <tr>
                <td></td>
                <td width="60%">PST (10%)</td>
                <td width="5%">$</td>
                <td width="35%" style="text-align:center;"><div class="nbpst">10.00</div> </td>
              </tr> 
              <tr>
                <td>+</td>
                <td width="60%">GST (5%)</td>
                <td width="5%">$</td>
                <td width="35%" style="text-align:center;"><div class="nbgst">5.00</div> </td>
              </tr> 
              <tr>
                <td>=</td>
                <td width="60%">Sales Taxes (15%)</td>
                <td width="5%">$</td>
                <td width="35%" style="text-align:center;"><div class="nbsale">15.00</div> </td>
              </tr> 
            </table> 
            <table width="100%">
               <tr>
                <td width="60%" style="font-weight:600;">Total After Taxes</td>
                <td width="5%"> $</td>
                <td width="35%" style="text-align:center;"><div class="nbtotal">115.00</div> </td>
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
              <input id="rnbgstvalue" name="rnbgstvalue" value="100" class="gstfield">
            </div>
            <br>
          
          </div>

              <div class="gst-col-1"> 
                <div class="gst_asste"> 

            <div class="gst-col-3">
            <table width="100%">
              <tr>
                <td></td>
                <td width="60%">PST (10%)</td>
                <td width="5%">$</td>
                <td width="35%" style="text-align:center;"><div class="rnbpst">8.70</div></td>
              </tr> 

              <tr>
                <td>+</td>
                <td width="60%">GST (5%)</td>
                <td width="5%"> $</td>
                <td width="35%" style="text-align:center;"><div class="rnbgst">4.35</div></td>
              </tr> 

              <tr>
                <td>=</td>
                <td width="60%">Sales Taxes (15%)</td>
                <td width="5%">$</td>
                <td width="35%" style="text-align:center;"><div class="rnbsale">13.04</div></td>
              </tr> 

            </table>

            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Amount Before Taxes</td>
                <td width="5%"> $</td>
                <td width="35%"  style="text-align:center;"><div class="rnbtotal">86.96</div> </td>
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