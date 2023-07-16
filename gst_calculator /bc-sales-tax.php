<?php 
if ( ! defined('ABSPATH')) exit;  // if direct access 

final class bcsalegst{

function __construct(){

	  add_shortcode('show_bctax_gst', [$this, 'bcgsttax']);
}

 function bcgsttax(){
 
?>


	   <h2 style="text-align:center;">BC Sales Tax (GST & PST) Calculator 2022</h2>

  <div class="gtabs">
      <input type="radio" name="gtabs" id="tabone" checked="checked">
      <label for="tabone">GST Calculator. Before Tax Amount </label>
      <div class="tab">  

        <div class="property-container">    
        
          <div class="gst-col-1 pro_color gtabs-pad">
            <div class="gst_asste"> 
             <div class="gst_title">Amount before taxes</div>
              <input id="mogstvalue" name="mogstvalue" value="100" class="gstfield">
            </div>
            <br>
           

          </div>

       <div class="gst-col-1"> 
        <div class="gst_asste"> 

        		<div class="roi-col-1">

			   		<table width="100%">
			   			  <tr> 
			   			  	<td><td>
			   			  	<td width="55%">PST (7%)<td>
			   			  	<td width="5%">$<td>
			   			  	<td width="40%" style="text-align:center;"> <div class="mopst">7.00</div> <td>	
			   			  </tr>
			   			   <tr> 
			   			  	<td>+<td>
			   			  	<td width="55%">GST (5%)<td>
			   			  	<td width="5%">$<td>
			   			  	<td width="40%" style="text-align:center;"> <div class="mogst">5.00</div> <td>	
			   			  </tr>
			   			   <tr> 
			   			  	<td> = <td>
			   			  	<td width="55%">Sales Taxes (12%)<td>
			   			  	<td width="5%">$<td>
			   			  	<td width="40%" style="text-align:center;"> <div class="mosale">12.00</div> <td>	
			   			  </tr>

			   		</table>
			   		<hr>
			   		<table width="100%">
			   			<tr>
			   				<td width="60%" style="font-weight:600;">Total After Taxes</td>
			   				<td width="5%"> $</td>
			   				<td width="35%" style="text-align:center;"><div class="mototal">112.00</div> </td>
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
              <input id="remogstvalue" name="remogstvalue" value="100" class="gstfield">
            </div>
            <br>
          
          </div>

          	  <div class="gst-col-1"> 
        <div class="gst_asste"> 

        		<div class="roi-col-1">

			   		<table width="100%">
			   			 <tr > 
			   			  	<td> <td>
			   			  	<td width="60%">PST (7%)<td>
			   			  	<td width="5%"> $<td>
			   			  	<td width="35%" style="text-align:center;"> <div class="rmopst"> 6.25</div><td>	
			   			  </tr>
			   			  <tr> 
			   			  	<td>+<td>
			   			  	<td width="55%">GST (5%)<td>
			   			  	<td width="5%">$<td>
			   			  	<td width="40%" style="text-align:center;"> <div class="rmogst">4.46</div> <td>	
			   			  </tr>
			   			  <tr> 
			   			  	<td>=<td>
			   			  	<td width="55%">Sales Taxes (12%)<td>
			   			  	<td width="5%">$<td>
			   			  	<td width="40%" style="text-align:center;"> <div class="rmosale">10.71</div> <td>	
			   			  </tr>
			
			   		</table>
			   		<hr>
			   		<table width="100%">
			   			<tr>
			   				<td width="60%" style="font-weight:600;">Amount Before Taxes	</td>
			   				<td width="5%"> $</td>
			   				<td width="35%"  style="text-align:center;"><div class="rmototal">89.29</div> </td>
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