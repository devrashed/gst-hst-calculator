<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

final class Albertagst{

function __construct(){

	  add_shortcode('show_alberto_gst', [$this, 'abgsttax']);
}

 function abgsttax(){
 
?>

  <h2 style="text-align:center;">Alberta Sales Tax (GST) Calculator 2022</h2>

  <div class="gtabs">
      <input type="radio" name="gtabs" id="tabone" checked="checked">
      <label for="tabone">GST Calculator. Before Tax Amount </label>
      <div class="tab">  

        <div class="property-container">    
        
          <div class="gst-col-1 pro_color gtabs-pad">
            <div class="gst_asste"> 
             <div class="gst_title">Amount before taxes</div>
              <input id="abgstvalue" name="abgstvalue" value="100" class="gstfield">
            </div>
            <br>
           

          </div>

       <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">

            <table width="100%" cellspacing="0" cellpadding="0">
               <tr> 
                  <td> <td>
                  <td width="60%">No Provincial Sales Tax<td>
                  <td width="5%">$<td>
                  <td width="35%" style="text-align:center;"> 0<td> 
                </tr>
                <tr> 
                  <td>+<td>
                  <td width="55%">GST (5%)<td>
                  <td width="5%">$<td>
                  <td width="40%" style="text-align:center;"> <div class="abgst">5.00</div> <td>  
                </tr>
                 <tr> 
                  <td> = <td>
                  <td width="55%">Sales Taxes (5%)<td>
                  <td width="5%">$<td>
                  <td width="40%" style="text-align:center;"> <div class="abgst">5.00</div> <td>  
                </tr>

            </table>
            <hr>
            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Total After Taxes</td>
                <td width="5%"> $</td>
                <td width="35%" style="text-align:center;"><div class="abtotal">105.00</div> </td>

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
              <input id="reabgstvalue" name="reabgstvalue" value="100" class="gstfield">
            </div>
            <br>
          
          </div>

              <div class="gst-col-1"> 
        <div class="gst_asste"> 

            <div class="gst-col-3">

            <table width="100%" >
               <tr> 
                  <td><td>
                  <td width="60%">No Provincial Sales Tax<td>
                  <td width="5%">$<td>
                  <td width="35%" style="text-align:center;"> 0<td> 
                </tr>
                <tr> 
                  <td>+<td>
                  <td width="55%">GST (5%)<td>
                  <td width="5%">$<td>
                  <td width="40%" style="text-align:center;"> <div class="rabpst">4.76</div> <td> 
                </tr>
                <tr> 
                  <td>=<td>
                  <td width="55%">Sales Taxes (5%)<td>
                  <td width="5%">$<td>
                  <td width="40%" style="text-align:center;"> <div class="rabpst">4.76</div> <td> 
                </tr>
      
            </table>
            <hr>
            <table width="100%">
              <tr>
                <td width="60%" style="font-weight:600;">Amount Before Taxes  </td>
                <td width="5%"> $</td>
                <td width="35%"  style="text-align:center;"><div class="rabtotal">104.76</div> </td>
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