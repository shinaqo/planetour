$(document).ready(function() {
	
	$("#formulario").submit(function(){
	 	var url ="../php/envioemail.php";

	 	$.ajax({
	 		type:"POST",
	 		url:url,
	 		data:$("#formulario").serialize(),
	 		sucess: function(data){
	 			$("#resultado").html(data);
	 		}
	 	});
	 	return false;
	});

});