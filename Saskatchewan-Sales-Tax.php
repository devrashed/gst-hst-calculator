<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

final class sasktchewangst{

function __construct(){

	  add_shortcode('show_sasktchawan_gst', [$this, 'Sasktachwantax']);
}

 function Sasktachwantax(){
 
?>

  <h2 style="text-align:center;">Saskatchewan Sales Tax (GST & PST) Calculator 2022</h2>

  <div class="gtabs">
      <input type="radio" name="gtabs" id="tabone" checked="checked">
      <label for="tabone">GST Calculator. Before Tax Amount</label>
      <div class="tab">  

        <div class="property-container">    
        
          <div class="gst-col-1 pro_color gtabs-pad">
            <div class="gst_asste"> 
             <div class="gst_title">Amount before taxes</div>
              <input id="stgstvalue" name="stgstvalue" value="100" class="gstfield">
            </div>
            <br>
          </div>

       <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">

              <table width="100%">
                    <tr>
                      <td></td>
                      <td width="55%">PST (6%)</td>
                      <td width="5%">$</td>
                      <td width="40%" style="text-align:center;"><div class="stpst">6.00</div></td>
                    </tr>
                    <tr>
                      <td>+</td>
                      <td width="55%">GST (5%)</td>
                      <td width="5%">$</td>
                      <td width="40%" style="text-align:center;"><div class="stgst">5.00</div></td>
                    </tr>
                    <tr>
                      <td>=</td>
                      <td width="55%">Sales Taxes (11%)</td>
                      <td width="5%">$</td>
                      <td width="40%" style="text-align:center;"><div class="stsale">11.00</div></td>
                    </tr>
              </table>  
            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Total After Taxes</td>
                <td width="5%"> $</td>
                <td width="35%" style="text-align:center;"><div class="sttotal">111.00</div> </td>

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
              <input id="rstgstvalue" name="rstgstvalue" value="100" class="gstfield">
            </div>
            <br>
          
          </div>

              <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">
              <table width="100%">
                <tr> 
                  <td></td>
                  <td width="60%">PST (6%)</td>
                  <td width="5%">$</td>
                  <td  width="35%" style="text-align:center;"> <div class="rstpst"> 5.41</div></td>
                </tr>

                <tr> 
                  <td>+</td>
                  <td width="60%">GST (5%)</td>
                  <td width="5%">$</td>
                  <td width="35%" style="text-align:center;"> <div class="rstgst">4.50</div> </td>
                </tr>

                <tr> 
                  <td>=</td>
                  <td width="60%">Sales Taxes (11%)</td>
                  <td width="5%">$</td>
                  <td width="35%" style="text-align:center;"> <div class="rstsale">13.05</div> </td>
                </tr>

              </table>  
            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Amount Before Taxes  </td>
                <td width="5%"> $</td>
                <td width="35%" style="text-align:center;"><div class="rqstotal">90.09</div> </td>
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