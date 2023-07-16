
  function thousands_separe(num)
  {
    let number = num.toString().split(".");
    number[0] = number[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return number.join(".");
  }  

/*
 ====== Alberta Sales Tax ======
*/
  
  $(document).ready(function(){

    $("#abgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#abgstvalue").on("keyup", function(){  
      let abgstvalue = Number($("#abgstvalue").val());
      let abgst = Number($('.abgst').html(thousands_separe( (abgstvalue * 5) / 100)));   
      let abtotal = (Number($("#abgstvalue").val()) + ((abgstvalue * 5) / 100)); 
      $('.abtotal').html(thousands_separe(abtotal));

    });


  });   


/*===============*/

   $(document).ready(function(){

    $("#reabgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#reabgstvalue").on("keyup", function(){  
      let reabgstvalue = Number($("#reabgstvalue").val());

      let rabpst = thousands_separe(((reabgstvalue * 4.76) / 100).toFixed(2));   
      $('.rabpst').html(rabpst);
      let rabtotal = Number($("#reabgstvalue").val()) + ((reabgstvalue * 4.76) / 100); 
      $('.rabtotal').html(thousands_separe(rabtotal.toFixed(2)));

    });

  });


 /*
 ====== Bc sales tax ======
*/  

 $(document).ready(function(){

    $("#mogstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#mogstvalue").on("keyup", function(){  
      let mogstvalue = Number($("#mogstvalue").val());
      let mopst = Number($('.mopst').html(thousands_separe( ((mogstvalue * 3.5) / 100).toFixed(2) )));
      let mogst =  Number($('.mogst').html(thousands_separe( ((mogstvalue * 2.5) / 100).toFixed(2) )));
      let mosaletax = ((mogstvalue * 3.5) / 100 + (mogstvalue * 2.5) / 100).toFixed(2); 
      $('.mosale').html(thousands_separe(mosaletax));
      let mototal = Number(mogstvalue + ((mogstvalue * 3.5) / 100 + (mogstvalue * 2.5) / 100)).toFixed(2); 
      $('.mototal').html(thousands_separe(mototal));

    });


  }); 


/*===============*/

   $(document).ready(function(){

    $("#remogstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#remogstvalue").on("keyup", function(){ 

      let remogstvalue = Number($("#remogstvalue").val());
      let rmopst = Number($('.rmopst').html(thousands_separe( ((remogstvalue * 6.25) / 100).toFixed(2) )));
      let rmogst =  Number($('.rmogst').html(thousands_separe( ((remogstvalue * 4.46) / 100).toFixed(2) )));
      let rmosaletax = ((remogstvalue * 6.25) / 100 + (remogstvalue * 4.46) / 100).toFixed(2); 
      $('.rmosale').html(thousands_separe(rmosaletax));
      let rmototal = Number(remogstvalue - ((remogstvalue * 6.25) / 100 + (remogstvalue * 4.46) / 100)).toFixed(2); 
      $('.rmototal').html(thousands_separe(rmototal));

    });


  });  



/*
====== Monitoba tax ======
*/  

$(document).ready(function(){

    $("#bcgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#bcgstvalue").on("keyup", function(){  
      let bcgstvalue = Number($("#bcgstvalue").val());
      let bcpst = Number($('.bcpst').html(thousands_separe( ((bcgstvalue * 7) / 100).toFixed(2) )));
      let bcgst =  Number($('.bcgst').html(thousands_separe( ((bcgstvalue * 5) / 100).toFixed(2) )));
      let bcsaletax = ((bcgstvalue * 7) / 100 + (bcgstvalue * 5) / 100).toFixed(2); 
      $('.bcsale').html(thousands_separe(bcsaletax));
      let bctotal = Number(bcgstvalue + ((bcgstvalue * 7) / 100 + (bcgstvalue * 5) / 100)).toFixed(2); 
      $('.bctotal').html(thousands_separe(bctotal));

    });


  }); 


/*===============*/

   $(document).ready(function(){

    $("#rebcgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#rebcgstvalue").on("keyup", function(){ 

      let rebcgstvalue = Number($("#rebcgstvalue").val());
      let rbcpst = Number($('.rbcpst').html(thousands_separe( ((rebcgstvalue * 6.25) / 100).toFixed(2) )));
      let rbcgst =  Number($('.rbcgst').html(thousands_separe( ((rebcgstvalue * 4.46) / 100).toFixed(2) )));
      let bcrsaletax = ((rebcgstvalue * 6.25) / 100 + (rebcgstvalue * 4.46) / 100).toFixed(2); 
      $('.rbcsale').html(thousands_separe(bcrsaletax));
      let bcrtotal = Number(rebcgstvalue - ((rebcgstvalue * 6.25) / 100 + (rebcgstvalue * 4.46) / 100)).toFixed(2); 
      $('.rbctotal').html(thousands_separe(bcrtotal));

    });
});   



/*
====== New Brounwick tax ======
*/ 


$(document).ready(function(){

    $("#nbgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#nbgstvalue").on("keyup", function(){  
      let nbgstvalue = Number($("#nbgstvalue").val());
      let nbpst = Number($('.nbpst').html(thousands_separe( ((nbgstvalue * 10) / 100).toFixed(2) )));
      let nbgst =  Number($('.nbgst').html(thousands_separe( ((nbgstvalue * 5) / 100).toFixed(2) )));
      let nbsaletax = ((nbgstvalue * 10) / 100 + (nbgstvalue * 5) / 100).toFixed(2); 
      $('.nbsale').html(thousands_separe(nbsaletax));
      let nbtotal = Number(nbgstvalue + ((nbgstvalue * 10) / 100 + (nbgstvalue * 5) / 100)).toFixed(2); 
      $('.nbtotal').html(thousands_separe(nbtotal));

    });


  }); 


/*===============*/

   $(document).ready(function(){

    $("#rnbgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#rnbgstvalue").on("keyup", function(){ 

      let rnbgstvalue = Number($("#rnbgstvalue").val());
      let rnbpst = Number($('.rnbpst').html(thousands_separe( ((rnbgstvalue * 8.7) / 100).toFixed(2) )));
      let rnbgst =  Number($('.rnbgst').html(thousands_separe( ((rnbgstvalue * 4.35) / 100).toFixed(2) )));
      let nbrsaletax = ((rnbgstvalue * 8.7) / 100 + (rnbgstvalue * 4.35) / 100).toFixed(2); 
      $('.rnbsale').html(thousands_separe(nbrsaletax));
      let rnbtotal = Number(rnbgstvalue - ((rnbgstvalue * 8.7) / 100 + (rnbgstvalue * 4.35) / 100)).toFixed(2); 
      $('.rnbtotal').html(thousands_separe(rnbtotal));

    });
 }); 


/*
====== New Foundland tax ======
*/ 
  
$(document).ready(function(){
    $("#nlgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#nlgstvalue").on("keyup", function(){  
      let nlgstvalue = Number($("#nlgstvalue").val());
      let nlpst = Number($('.nlpst').html(thousands_separe( ((nlgstvalue * 10) / 100).toFixed(2) )));
      let nlgst =  Number($('.nlgst').html(thousands_separe( ((nlgstvalue * 5) / 100).toFixed(2) )));
      let nlsaletax = ((nlgstvalue * 10) / 100 + (nlgstvalue * 5) / 100).toFixed(2); 
      $('.nlsale').html(thousands_separe(nlsaletax));
      let nltotal = Number(nlgstvalue + ((nlgstvalue * 10) / 100 + (nlgstvalue * 5) / 100)).toFixed(2); 
      $('.nltotal').html(thousands_separe(nltotal));

    });
  }); 


/*===============*/

   $(document).ready(function(){
    $("#rnlgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#rnlgstvalue").on("keyup", function(){ 

      let rnlgstvalue = Number($("#rnlgstvalue").val());
      let rnlpst = Number($('.rnlpst').html(thousands_separe( ((rnlgstvalue * 8.7) / 100).toFixed(2) )));
      let rnlgst =  Number($('.rnlgst').html(thousands_separe( ((rnlgstvalue * 4.35) / 100).toFixed(2) )));
      let rnlsaletax = ((rnlgstvalue * 8.7) / 100 + (rnlgstvalue * 4.35) / 100).toFixed(2); 
      $('.rnlsale').html(thousands_separe(rnlsaletax));
      let rnltotal = Number(rnlgstvalue - ((rnlgstvalue * 8.7) / 100 + (rnlgstvalue * 4.35) / 100)).toFixed(2); 
      $('.rnltotal').html(thousands_separe(rnltotal));

    });
  });  


 

/*
====== Nova Scotia ======
*/ 

 $(document).ready(function(){

    $("#nvgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#nvgstvalue").on("keyup", function(){  
      let nvgstvalue = Number($("#nvgstvalue").val());
      let nvpst = Number($('.nvpst').html(thousands_separe( ((nvgstvalue * 10) / 100).toFixed(2) )));
      let nvgst =  Number($('.nvgst').html(thousands_separe( ((nvgstvalue * 5) / 100).toFixed(2) )));
      let nvsaletax = (((nvgstvalue * 10) / 100) + ((nvgstvalue * 5) / 100)).toFixed(2); 
      //console.log(nvsaletax);
      $('.nvsale').html(thousands_separe(nvsaletax));
      let nvtotal = Number(nvgstvalue + ((nvgstvalue * 10) / 100 + (nvgstvalue * 5) / 100)).toFixed(2); 
      $('.nvtotal').html(thousands_separe(nvtotal));

    });
}); 


/*===============*/

   $(document).ready(function(){

    $("#rnvgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#rnvgstvalue").on("keyup", function(){ 

      let rnvgstvalue = Number($("#rnvgstvalue").val());
      let rnvpst = Number($('.rnvpst').html(thousands_separe( ((rnvgstvalue * 8.7) / 100).toFixed(2) )));
      let rnvgst =  Number($('.rnvgst').html(thousands_separe( ((rnvgstvalue * 4.35) / 100).toFixed(2) )));
      let rnvsaletax = ((rnvgstvalue * 8.7) / 100 + (rnvgstvalue * 4.35) / 100).toFixed(2); 
      $('.rnvsale').html(thousands_separe(rnvsaletax));
      let rnvtotal = Number(rnvgstvalue - ((rnvgstvalue * 8.7) / 100 + (rnvgstvalue * 4.35) / 100)).toFixed(2); 
      $('.rnvtotal').html(thousands_separe(rnvtotal));

    });
  });

 
/*
====== Ontario tax ======
*/  

$(document).ready(function(){

    $("#ongstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#ongstvalue").on("keyup", function(){  
      let ongstvalue = Number($("#ongstvalue").val());
      let onpst = Number($('.onpst').html(thousands_separe( ((ongstvalue * 7.08) / 100).toFixed(2) )));
      let ongst =  Number($('.ongst').html(thousands_separe( ((ongstvalue * 4.42) / 100).toFixed(2) )));
      let onsaletax = ((ongstvalue * 7.08) / 100 + (ongstvalue * 4.42) / 100).toFixed(2); 
      $('.onsale').html(thousands_separe(onsaletax));
      let ontotal = Number(ongstvalue + ((ongstvalue * 7.08) / 100 + (ongstvalue * 4.42) / 100)).toFixed(2); 
      $('.ontotal').html(thousands_separe(ontotal));

    });
  }); 


/*===============*/

   $(document).ready(function(){

    $("#rnogstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#rnogstvalue").on("keyup", function(){ 

      let rnogstvalue = Number($("#rnogstvalue").val());
      let rnopst = Number($('.rnopst').html(thousands_separe( ((rnogstvalue * 6.25) / 100).toFixed(2) )));
      let rnogst =  Number($('.rnogst').html(thousands_separe( ((rnogstvalue * 4.46) / 100).toFixed(2) )));
      let ronsaletax = ((rnogstvalue * 6.25) / 100 + (rnogstvalue * 4.46) / 100).toFixed(2); 
      $('.rnosale').html(thousands_separe(ronsaletax));
      let rnototal = Number(rnogstvalue - ((rnogstvalue * 6.25) / 100 + (rnogstvalue * 4.46) / 100)).toFixed(2); 
      $('.rnototal').html(thousands_separe(rnototal));

    });
  });

  
  /*
====== Prince Edward land  tax ======
*/  

   $(document).ready(function(){

    $("#pegstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#pegstvalue").on("keyup", function(){  
      let pegstvalue = Number($("#pegstvalue").val());
      let pepst = Number($('.pepst').html(thousands_separe( ((pegstvalue * 10) / 100).toFixed(2) )));
      let pegst =  Number($('.pegst').html(thousands_separe( ((pegstvalue * 5) / 100).toFixed(2) )));
      let pesaletax = (((pegstvalue * 10) / 100) + ((pegstvalue * 5) / 100)).toFixed(2); 
      $('.pesale').html(thousands_separe(pesaletax));
      let petotal = Number(pegstvalue + ((pegstvalue * 10) / 100 + (pegstvalue * 5) / 100)).toFixed(2); 
      $('.petotal').html(thousands_separe(petotal));

    });
 }); 


/*===============*/

   $(document).ready(function(){

    $("#rpegstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#rpegstvalue").on("keyup", function(){ 

      let rpegstvalue = Number($("#rpegstvalue").val());
      let rpepst = Number($('.rpepst').html(thousands_separe( ((rpegstvalue * 8.7) / 100).toFixed(2) )));
      let rpegst =  Number($('.rpegst').html(thousands_separe( ((rpegstvalue * 4.35) / 100).toFixed(2) )));
      let rpesaletax = ((rpegstvalue * 8.7) / 100 + (rpegstvalue * 4.35) / 100).toFixed(2); 
      $('.rpesale').html(thousands_separe(rpesaletax));
      let rpetotal = Number(rpegstvalue - ((rpegstvalue * 8.7) / 100 + (rpegstvalue * 4.35) / 100)).toFixed(2); 
      $('.rpetotal').html(thousands_separe(rpetotal));

    });
  });


/*
====== Quebec sales  tax ======
*/  



 $(document).ready(function(){

    $("#qsgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#qsgstvalue").on("keyup", function(){  
      let qsgstvalue = Number($("#qsgstvalue").val());
      let qspst = Number($('.qspst').html(thousands_separe( ((qsgstvalue * 9.975) / 100).toFixed(2) )));
      let qsgst =  Number($('.qsgst').html(thousands_separe( ((qsgstvalue * 5) / 100).toFixed(2) )));
      let qssaletax = (((qsgstvalue * 9.975) / 100) + ((qsgstvalue * 5) / 100)).toFixed(2); 
      $('.qssale').html(thousands_separe(qssaletax));
      let qstotal = Number(qsgstvalue + ((qsgstvalue * 9.975) / 100 + (qsgstvalue * 5) / 100)).toFixed(2); 
      $('.qstotal').html(thousands_separe(qstotal));

    });
  }); 


/*===============*/

   $(document).ready(function(){

    $("#rqsgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#rqsgstvalue").on("keyup", function(){ 

      let rqsgstvalue = Number($("#rqsgstvalue").val());
      let rqspst = Number($('.rqspst').html(thousands_separe( ((rqsgstvalue * 8.68) / 100).toFixed(2) )));
      let rqsgst =  Number($('.rqsgst').html(thousands_separe( ((rqsgstvalue * 4.35) / 100).toFixed(2) )));
      let rqssaletax = ((rqsgstvalue * 8.68) / 100 + (rqsgstvalue * 4.35) / 100).toFixed(2); 
      $('.rqssale').html(thousands_separe(rqssaletax));
      let rqstotal = Number(rqsgstvalue - ((rqsgstvalue * 8.68) / 100 + (rqsgstvalue * 4.35) / 100)).toFixed(2); 
      $('.rqstotal').html(thousands_separe(rqstotal));

    });
  });


/*
====== Saskatchewan-Sales-Tax ======
*/  


$(document).ready(function(){

    $("#stgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#stgstvalue").on("keyup", function(){  
      let stgstvalue = Number($("#stgstvalue").val());
      let stpst = Number($('.stpst').html(thousands_separe( ((stgstvalue * 6) / 100).toFixed(2) )));
      let stgst =  Number($('.stgst').html(thousands_separe( ((stgstvalue * 5) / 100).toFixed(2) )));
      let stsaletax = (((stgstvalue * 6) / 100) + ((stgstvalue * 5) / 100)).toFixed(2); 
      $('.stsale').html(thousands_separe(stsaletax));
      let sttotal = Number(stgstvalue + ((stgstvalue * 6) / 100 + (stgstvalue * 5) / 100)).toFixed(2); 
      $('.sttotal').html(thousands_separe(sttotal));

    });
  }); 


/*===============*/

   $(document).ready(function(){

    $("#rstgstvalue").keypress(function (num) {    
      let numberFor = (num.what) ? num.what : event.keyCode    
      if (String.fromCharCode(numberFor).match(/[^0-9]/g))    
        return false;  
    });

    $("#rstgstvalue").on("keyup", function(){ 

      let rstgstvalue = Number($("#rstgstvalue").val());
      let rstpst = Number($('.rstpst').html(thousands_separe( ((rstgstvalue * 5.41) / 100).toFixed(2) )));
      let rstgst =  Number($('.rstgst').html(thousands_separe( ((rstgstvalue * 4.50) / 100).toFixed(2) )));
      let rstsaletax = ((rstgstvalue * 5.41) / 100 + (rstgstvalue * 4.50) / 100).toFixed(2); 
      $('.rstsale').html(thousands_separe(rstsaletax));
      let rqstotal = Number(rstgstvalue - ((rstgstvalue * 5.41) / 100 + (rstgstvalue * 4.50) / 100)).toFixed(2); 
      $('.rqstotal').html(thousands_separe(rqstotal));

    });
  });


