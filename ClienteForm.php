<?php   

include 'header.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
	<title>Encuesta de Retroalimentacion</title> 
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

	<script>

  // When the browser is ready...
  $(function() {

    // Setup form validation on the #register-form element
    $("#register-form").validate({

        // Specify the validation rules
        rules: {
        	nombreUsuario: "required",
        	email: {
        		required: true,
        		email: true
        	},
        	use: "required",
        	op: "required"
        },
        
        // Specify the validation error messages
        messages: {
        	nombreUsuario: "Please enter your name",
        	email: "Please enter a valid email address",
        	use: "Please select one option"
        	op: "required"
        },
        
        submitHandler: function(form) {
        	form.submit();
        }
    });

});
  
  </script>
</head> 

<body> 
	<h1>Encuesta de Retroalimentacion</h1>
	<form action="insert.php" method="post" onsubmit="" id="register-form" novalidate="novalidate"> 
		<hr/>  
		<p><label for="nombreUsuario" >Nombre:<input type="text" id="name" name="name" /> 
		</label></p> 
		<p><label for="email" >Correo electronico:
			<input type="text" id="email" name="email" /> 

		</label></p> 
		<p><label for="uso">Aspectos que le gustaron:<br/> 
			<select size="3" multiple="multiple" id="use"> 
				<option value="diseño">Diseño</option> 
				<option value="Links">Links</option> 
				<option value="Imagenes">Imagenes</option> 
			</select> 
		</label></p> 
		<p><label for="op">¿Cómo llegó a este sitio?<br/> 
			<input type="radio" id="busqueda" name="sitedata" value="Maquina de busqueda" class="radio"/>Maquina de busqueda
			<input type="radio" id="libro" name="sitedata" value="Referencia de un libro" class="radio"/>Referencia de un libro
			<input type="radio" id="otro" name="sitedata" value="Otro" class="radio"/>Otro
		</label></p> 
		<p><input type="submit" name"submit" value="Submit"/>&nbsp;<input type="reset"/></p> 
	</form> 
</body> 
</html> 