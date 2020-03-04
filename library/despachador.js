var cont= 1 ;
$(document).ready(function() {
					// Check for the various File API support.
    if (window.File && window.FileReader && window.FileList && window.Blob) {

		  	//alert("holaddddd");
		  	 
		  // $('#shopReturn').append("JAJAJA");
		  	
		    $('.ProdId').click(function(e){	
              cont=1;
		    	//  e.preventDefault();
		        // console.log(e.target.id);

		        var data = {'idProd':e.target.id,'p':cont};
		    	// alert("entree jajja");
		    	  
		    	  console.log(data);
		    	   $.ajax({
		 	                data:  data,
		 	                url:   'supplylogisticsView.php',
		 	                type:  'post',
		 	                beforeSend: function () {
		 	                         $("#shopReturn").html("Procesando, espere por favor...");
		 	                        $("#shopReturn").html("<img src='../img/ajax-loader.gif' alt='hop' /> ");
		 	                },
		 	                success:  function (response) {
		 	                		$('#shopReturn').html("");
		 	                        $("#shopReturn").html(response);
		 	                },
    							timeout: 10000 // sets timeout to 10 seconds
		 	        });  

            });
            
       
		    $('.ProdIdMas').click(function(e) {
                 // alert( "Handler for .dblclick() called." );
                  //console.log(e.target.id);
                  cont++;
		        var data = {'idProd':e.target.id,'p':cont};
		    	//alert("entree jajja");
		    	  
		    	  console.log(data);
		    	   $.ajax({
		 	                data:  data,
		 	                url:   'verProductosId.php',
		 	                type:  'post',
		 	                beforeSend: function () {
		 	                        //$("#contenedor").html("Procesando, espere por favor...");
		 	                        $("#contenedor").html("<img src='public/iconos/ajax-loader.gif' />");
		 	                },
		 	                success:  function (response) {
		 	                		$('#contenedor').html("");
		 	                        $("#contenedor").html(response);
		 	                },
    							timeout: 10000 // sets timeout to 10 seconds
		 	        });  
 
		    });

		    $('.ProdIdMenos').click(function(e) {
                 // alert( "Handler for .dblclick() called." );
                  //console.log(e.target.id);
                  if(cont>1)cont--;
		        var data = {'idProd':e.target.id,'p':cont};
		    	//alert("entree jajja");
		    	  
		    	  console.log(data);
		    	   $.ajax({
		 	                data:  data,
		 	                url:   'verProductosId.php',
		 	                type:  'post',
		 	                beforeSend: function () {
		 	                        //$("#contenedor").html("Procesando, espere por favor...");
		 	                        $("#contenedor").html("<img src='public/iconos/ajax-loader.gif' />");
		 	                },
		 	                success:  function (response) {
		 	                		$('#contenedor').html("");
		 	                        $("#contenedor").html(response);
		 	                },
    							timeout: 10000 // sets timeout to 10 seconds
		 	        });  
 
		    });

		    $('.ProdTodo').click(function(e){	
		    cont='1';     
		        var data = {'idProd':'-5'};
		    	  console.log(data);
		    	   $.ajax({
		 	                data:  data,
		 	                url:   'verProductosId.php',
		 	                type:  'post',
		 	                beforeSend: function () {
		 	                       //$("#contenedor").html("Procesando, espere por favor...");
		 	                        $("#contenedor").html("<img src='public/iconos/ajax-loader.gif' />");
		 	                },
		 	                success: function (response) {
		 	                		$('#contenedor').html("");
		 	                        $("#contenedor").html(response);
		 	                },
   							 timeout: 10000 // sets timeout to 10 seconds
		 	        });  

		    });
		 
			/* ********************************** BOTON ARRIBA ****************************** */
			$('#IrArriba').hide();
				$(function(){
					$(window).scroll(function(){
						if($(this).scrollTop() > 200){
							$('#IrArriba').fadeIn();
						}else{
							$('#IrArriba').fadeOut();
						}
					})
					$('#IrArriba span').click(function(){
						$('body,html').animate({
							scrollTop: 0
						}, 1000);
						return false;
				})
			})
     		/* ********************************** set interbal  ****************************** */ 

           
			$(function(){
                 setInterval(function(){
					$('#gatgets').load('gatgets.php');
				},1000);
			});

			$('#vaciarCarrito').click(function(){
				if (confirm("¿Seguro que quieres VACIAR el CARRITO?"))
						 {    
						   $.get("vaciarCarrito.php");    
						 }    
						 else 
						 {    
						  return false;    
						 }
			});			  
		
		
            



	} else {
	  alert('Los Archivos APIs no son soportados por su Navegador.');
	}
}) //cierra document 





	/*  var auto_refresh = setInterval(function(){
			 	 $(".resultados").fadeOut('10').load('/preLoad-upLoad-PHP-AJAX/library/autoRefresh.php').fadeIn('50');
			     }, 10000);  */
		
            /*$.getScript('http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js',function(){
            	$('#salir').slideUp(3000,'easeOutBounce');
            })*/
     
           /*$(function(){
             setInterval(function() {
				  $("#gatgets").load("http://localhost/ZZ-Supermercado-Necochea/aplicaciones/layouts/gatgets.php");
				}, 1000);
             });*/

           /* setInterval(function(){
				$('#gatgets').ajax({
				url: "aplicaciones/layouts/gatgets.php",
				}).done(function() {
				$(this).html( "done" );
				$('#gatgets').append('hoja.::.<br/>');
				$('#gatgets').html( "done" );
				});
				}, 3000); // 3000 micro second = 3 sec. 	
             /*   $("#gatgets").load("aplicaciones/layouts/gatgets.php");
			   var refreshId = setInterval(function() {
			      $("#gatgets").load('aplicaciones/layouts/gatgets.php?randval='+ Math.random());
			   }, 1000);
			   $.ajaxSetup({ cache: false });*/  