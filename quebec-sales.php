<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

final class qubictaxgst{

function __construct(){

	  add_shortcode('show_quebic_gst', [$this, 'quebicegsttax']);
}

 function quebicegsttax(){
 
?>

  <h2 style="text-align:center;">Quebec Sales Tax (GST & QST) Calculator 2022</h2>

  <div class="gtabs">
      <input type="radio" name="gtabs" id="tabone" checked="checked">
      <label for="tabone">GST Calculator. Before Tax Amount</label>
      <div class="tab">  

        <div class="property-container">    
        
          <div class="gst-col-1 pro_color gtabs-pad">
            <div class="gst_asste"> 
             <div class="gst_title">Amount before taxes</div>
              <input id="qsgstvalue" name="qsgstvalue" value="100" class="gstfield">
            </div>
            <br>
           

          </div>

       <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">

              <table width="100%">  
                <tr>
                  <td></td>
                  <td width="55%">QST (9.975%)</td>
                  <td width="5%">$</td>
                  <td width="40%" style="text-align:center;"><div class="qspst">9.97</div></td>
                </tr>

                 <tr>
                  <td>+</td>
                  <td width="55%">GST (5%)</td>
                  <td width="5%">$</td>
                  <td width="40%" style="text-align:center;"><div class="qsgst">5.00</div></td>
                </tr>

                 <tr>
                  <td>=</td>
                  <td width="55%">Sales Taxes (14.975%)</td>
                  <td width="5%">$</td>
                  <td width="40%" style="text-align:center;"><div class="qssale">14.97</div></td>
                </tr>

              </table>  
            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Total After Taxes</td>
                <td width="5%">$</td>
                <td width="35%" style="text-align:center;"><div class="qstotal">114.97</div> </td>

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
              <input id="rqsgstvalue" name="rqsgstvalue" value="100" class="gstfield">
            </div>
            <br>
          
          </div>

              <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">

             <table width="100%"> 
              <tr>
                <td></td>
                <td width="60%">PST (9.975%)</td>
                <td width="5%">$</td>
                <td width="35%" style="text-align:center;"><div class="rqspst"> 8.7</div></td>
              </tr>  
              <tr>
                <td></td>
                <td width="60%">GST (5%)</td>
                <td width="5%">$</td>
                <td width="35%" style="text-align:center;"><div class="rqsgst">4.35</div></td>
              </tr>  
              <tr>
                <td></td>
                <td width="60%">Sales Taxes (14.975%)</td>
                <td width="5%">$</td>
                <td width="35%" style="text-align:center;"><div class="rqssale">13.02</div></td>
              </tr>  
             </table> 

          
            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Amount Before Taxes  </td>
                <td width="5%"> $</td>
                <td width="35%" style="text-align:center;"><div class="rqstotal">86.98</div> </td>
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