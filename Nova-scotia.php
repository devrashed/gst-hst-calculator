<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

final class Novagst{

function __construct(){

	  add_shortcode('show_novascotia_gst', [$this, 'novascotiatax']);
}

 function novascotiatax(){
 
?>

  <h2 style="text-align:center;">Nova Scotia Sales Tax (HST) Calculator 2022</h2>

  <div class="gtabs">
      <input type="radio" name="gtabs" id="tabone" checked="checked">
      <label for="tabone">GST Calculator. Before Tax Amount</label>
      <div class="tab">  

        <div class="property-container">    
        
          <div class="gst-col-1 pro_color gtabs-pad">
            <div class="gst_asste"> 
             <div class="gst_title">Amount before taxes</div>
              <input id="nvgstvalue" name="nvgstvalue" value="100" class="gstfield">
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
                <td width="35%"><div class="nvpst">10.00</div></td>
              </tr>
              <tr>
                <td>+</td>
                <td width="60%">GST (5%)</td>
                <td width="5%">$</td>
                <td width="35%"><div class="nvgst">5.00</div> </td>
              </tr>
              <tr>
                <td>=</td>
                <td width="60%">Sales Taxes (15%)</td>
                <td width="5%">$</td>
                <td width="35%"><div class="nvsale">15.00</div></td>
              </tr>

            </table> 
            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Total After Taxes</td>
                <td width="5%">$</td>
                <td width="35%" style="text-align:center;"><div class="nvtotal">115.00</div> </td>
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
              <input id="rnvgstvalue" name="rnvgstvalue" value="100" class="gstfield">
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
               <td width="35%" style="text-align:center;"> <div class="rnvpst"> 8.7</div> </td>
              </tr> 

              <tr> 
               <td>+</td>  
               <td width="60%">GST (5%)</td>
               <td width="5%">$</td>
               <td width="35%" style="text-align:center;"> <div class="rnvgst">4.35</div> </td>
              </tr>
              
              <tr> 
               <td>=</td>  
               <td width="60%">Sales Taxes (12%)</td>
               <td width="5%">$</td>
               <td width="35%" style="text-align:center;"> <div class="rnvsale">13.05</div> </td>
              </tr>   

             <table> 
            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Amount Before Taxes  </td>
                <td width="5%"> $</td>
                <td width="35%" style="text-align:center;"><div class="rnvtotal">86.96</div> </td>
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