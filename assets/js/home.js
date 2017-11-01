function carregarTabela(){
	
	$.ajax({
		url:'http://lista_usuarios.pc/models/Tabela.php',
		cache: false,
		dataType: "json",
		beforeSend:function(){
			$("h2").html("Carregando...");
		},
		error:function(e){			
			$("h2").html("Houve algum erro ou nenhum usuário cadastrado");
		},		
		success:function(json){			
				for(var i = 0; i < json.length; i++){
					
					if(json[i].tipo == 1){
						$('tbody').append('<tr class="Masculino">'
							+ '<td>'+json[i].nome+'</td>'
							+ '<td>'+json[i].telefone+'</td>'							
							+ '</tr>');
					}else{
						$('tbody').append('<tr class="Feminino">'
							+ '<td>'+json[i].nome+'</td>'
							+ '<td>'+json[i].telefone+'</td>'							
							+ '</tr>');
					}					
				}
			$("h2").html("");
		}
	});
}