	<!DOCTYPE html>
		<html lang="en">
		  <head>
			<meta charset="utf-8">
		  <meta charset="utf-8">
		  
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
		 
		 
		 
		 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>		
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

   <script src="js/bootstrap.min.js"></script>
		  
		  
		   
		   
		  <link rel="stylesheet" href="css/bootstrap.min.css">
		  
		
		  
		 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  -->
		
		  
		  <style>
		  body{
		   background-color: lightblue;
		  }
		  .espaco{
		  margin-top: 350px;
		
		  }
.alert {
width:30%;
margin: auto;
}
<!--
button#cop{
	left: 390px;
}
-->
		  
		  </style>
		  
		  
 <script type="text/javascript">
  function copiarTexto() {
    var textoCopiado = document.getElementById("cu");
    textoCopiado.select();
    document.execCommand("Copy");
  
 
  
 //  alert("Texto Copiado: " + textoCopiado.value);
/*  if($("#myAlert").find("div#myAlert2").length==0){
    $("#myAlert").append("<div class='alert alert-success alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> Success! message sent successfully.</div>");
  }
  $("#myAlert").css("display", ""); */
  
  
   $(".alert").stop().fadeTo(1, 1).removeClass('hidden');
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(".alert").addClass('hidden');
    });
  }, 1000); 
  }
  
  
  function selector() {
 
}
  
</script>
	  
<?php


//isset($_GET["tam"])?$_GET["tam"]:0;


$valor = empty($_GET["texto"])?"Preencha- o- campo!":$_GET["texto"];   

function limpaCPF_CNPJ($valor){
 $valor = trim($valor);
 $valor = str_replace(".", "", $valor);
 $valor = str_replace(",", "", $valor);
 $valor = str_replace("-", "", $valor);
 $valor = str_replace("/", "", $valor);
 $valor = str_replace(" ", "", $valor);
 
 return $valor;
}

//echo limpaCPF_CNPJ($valor);

?>
		  
		  </head>
		  <body>
		  
	
		  
	
		
		  
		  	<div class="alert alert-success hidden " style="display:none;" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Copiado</strong> Com Sucesso!
		</div>
			  
		<div class="container p-3 my-5 mt- bg-primary text-white" ;>
		  <div class="input-group mb-5">
	
	
		<input type="text" name="texto" id="cu" class="form-control" value="<?php echo limpaCPF_CNPJ($valor);?>" readonly/>
		  <span class="input-group-text bg-warning "  onClick="copiarTexto()" id="ola" type="button">Copiar</span>
	
   
 
	
		
	  </div>
	  <div class="text-center">
	  <a href="index.html"  > <button type="button" class="btn bg-warning  ">Voltar</button></a>
	<!-- <button type="button" class="btn bg-warning"  id="cop" onClick="copiarTexto()">copy</button></a> -->
	  </div>
	  </form>					
	 
		<h2> <p class="text-center font-italic" ><br>Clique no botão a direita do campo acima para <b>copiar!</b></p></h2><br><br>
	
	
		
		</div>
			
		
			  	 
<div class="fixed-bottom">
<footer class="page-footer font-small teal  pt-5">

  <div class="footer-copyright text-right pt-5 mt-3 py-1"> 
  
  <p class="font-weight-bold">© 2020 By K.Kash<br>v2.0</p>
  </div>
  
  
  </footer>
  
</div>
<div class="fixed-bottom">
<footer class="page-footer font-small teal  pt-5">

  <div class="footer-copyright text-right pt-5 mt-3 py-1"> 
  
 
  </div>
  
  
  </footer>
  
</div>
	  
			  
			 
		  </body>
		  </html>