function carregarTabela(){	
	
	var itens = '';	
	
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
					itens += "<tr>";
					itens += "<td>" + json[i].nome + "</td>";
					itens += "<td>" + json[i].telefone + "</td>";
					itens += "<td>" + json[i].sexo + "</td>";
					itens += "</tr>";
				}			
			$("#usuarios tbody").html(itens);			
			$("h2").html("");
		}
	});
}