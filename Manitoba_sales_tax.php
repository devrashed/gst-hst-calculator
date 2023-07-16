<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

final class Monitobagst{

function __construct(){

	  add_shortcode('show_monitoba_gst', [$this, 'Moniagsttax']);
}

 function Moniagsttax(){
 
?>

  <h2 style="text-align:center;">Manitoba Sales Tax (GST & RST) Calculator 2022</h2>

  <div class="gtabs">
      <input type="radio" name="gtabs" id="tabone" checked="checked">
      <label for="tabone">GST Calculator. Before Tax Amount </label>
      <div class="tab">  

        <div class="property-container">    
        
          <div class="gst-col-1 pro_color gtabs-pad">
            <div class="gst_asste"> 
             <div class="gst_title">Amount before taxes</div>
              <input id="bcgstvalue" name="bcgstvalue" value="100" class="gstfield">
            </div>
            <br>
           

          </div>

       <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">

            <table width="100%">
              <tr>
                <td></td>
                <td width="55%">PST (7%)</td>
                <td width="5%">$</td>
                <td width="40%" style="text-align:center;"><div class="bcpst">7.00</div></td>
              </tr> 
              <tr>
                <td>+</td>
                <td width="55%">GST (5%)</td>
                <td width="5%">$</td>
                <td width="40%" style="text-align:center;"><div class="bcgst">5.00</div></td>
              </tr> 
              <tr>
                <td>=</td>
                <td width="55%">Sales Taxes (12%)</td>
                <td width="5%">$</td>
                <td width="40%" style="text-align:center;"><div class="bcsale">12.00</div></td>
              </tr>  
             </table>

            <table width="100%">
              <tr>
                <td width="61%" style="font-weight:600;">Total After Taxes</td>
                <td width="5%">$</td>
                <td width="34%" style="text-align:center;"><div class="bctotal">112.00</div> </td>
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
              <input id="rebcgstvalue" name="rebcgstvalue" value="50" class="gstfield">
            </div>
            <br>
          
          </div>

              <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">

              <table width="100%">
                <tr>
                  <td></td>
                  <td width="61%">PST (7%)  </td>
                  <td width="5%">$</td>
                  <td width="34%" style="text-align:center;"><div class="rbcpst"> 6.25</div></td>
                </tr> 

                 <tr>
                  <td>+</td>
                  <td width="61%">GST (5%)</td>
                  <td width="5%">$</td>
                  <td width="34%" style="text-align:center;"><div class="rbcgst">4.46</div> </td>
                </tr> 

                 <tr>
                  <td>=</td>
                  <td width="61%">Sales Taxes (12%) </td>
                  <td width="5%">$</td>
                  <td width="34%" style="text-align:center;"> <div class="rbcsale">10.71</div> </td>
                </tr> 

            </table>
            
            <table width="100%">
              <tr>
                <td width="61%" style="font-weight:600;">Amount Before Taxes  </td>
                <td width="5%"> $</td>
                <td width="34%"  style="text-align:center;"><div class="rbctotal">52.50</div> </td>
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