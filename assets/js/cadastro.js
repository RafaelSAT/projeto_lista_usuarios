$(function(){
	
	$('#form').bind('submit', function(){		
		
		var txt = $(this).serialize();		
		
		$.ajax({
			type:'POST',
			cache:false,
			data:txt,
			url:'http://lista_usuarios.pc/models/Cadastro.php',
			success:function(html){
				$("h2").html("Cadastro realizado com Sucesso!");
			},			
		});
	});
	
});