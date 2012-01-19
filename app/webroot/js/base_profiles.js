//console.profile('yepnope load callback');
yepnope({
    load: '//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
    callback: function (url, result, key) {
	if (!window.jQuery){ 
	    yepnope(baseUrl+'js/jquery.min.js');
	}
    },
    complete: function() {
//console.profileEnd('yepnope load callback');
	$ = jQuery;
	//Coloque seu code jQuery aqui!!!!
	$(document).ready(function() {
	    //Variáveis de elementos
	    var $form	    = $("#form_cadastro"),
		$listagem   = $("#listagem"),
		//Variáveis de tipos
		typeSubmit  = "[type='submit']",
		typeReset   = "[type='reset']",
		//Variaveis com os nomes dos elementos do form
		nameName    = "[name='name']",
		nameID	    = "[name='id']"
		;
	    
	    //Método para limpar o form e retirar o input hidden ID
	    $form.on('click', typeReset, function(e){
		var newButtonVal = "Inserir";
		//Removo o input hidden ID
		$(nameID).remove();
		//Retorno o valor do botão para Inserir
		$(typeSubmit).val(newButtonVal);
	    });
	    

	    //Método para popular os valores do registro no form
	    $listagem.on('click', '.registry', function(e){
		var $a		    = $(this),
		    $button	    = $form.find(typeSubmit).end(),
		    newButtonVal    = "Salvar",
		    id		    = getIdUrl(href),
		    inputID	    = createInput("hidden", "id", id)
		    ;
		    
		$form.find(nameName).val(text);
		$form.find(typeSubmit).val(newButtonVal);
		$form.append(inputID);

		e.preventDefault();
		return false;
	    });//fim #listagem a
	    
	    //Método que gerencia as ações nos links
	    $listagem.on('click', '.action', function(e){
		e.preventDefault();
		
		var $a	    = $(this),
		    action  = $a.text().toLowerCase(),
		    id	    = getIdUrl($a),
		    inputID = createInput("hidden", "id", id),
		    text    = $a.parents("tr").find(".registry").text()
		    ;
		switch(action){
		    case "alterar":	
			var newButtonVal = "Salvar";	
			$form.attr("data-action", action);
			$form.find(nameName).val(text);
			$form.find(typeSubmit).val(newButtonVal);
			$form.append(inputID);
			break;
		    case "deletar":
			$form.attr("data-action", action);
			alert();
			break;
		    default: //Inserir
			return false;
		}
		
		e.preventDefault();
		return false;
	    });//fim click .action
	    
	    
	    //Método para inserir registros
	    $form.on('click', typeSubmit, function(e){	
		var form	    = $(this).parents("form").attr("id"),
		    $form	    = $("#"+form),
		    $lista	    = $("#listagem"),
		    url		    = $form.attr("action"),
		    action	    = $form.data("action"), //inserir, alterar, deletar
		    type	    = $form.attr("method").toLowerCase(),
		    data	    = $form.serialize(),
		    dataArr	    = $form.serializeArray()
		    ;
		    
		var msgInsertTrue   = __model+ " inserido com sucesso!",
		    msgInsertFalse  = __model+ " não pode ser inserido com sucesso!",
		    msgUpdateTrue   = __model+ " alterado com sucesso!",
		    msgUpdateFalse  = __model+ " não pode ser alterado com sucesso!",
		    msgDeleteTrue   = __model+ " deletado com sucesso!",
		    msgDeleteFalse  = __model+ " não pode ser deletado com sucesso!"
		    ;
		/*
		 * Caso deseje mostrar os dados sem consulta-los,
		 * guarde em vars seus valores que foram enviados.
		 * 
		 * var dataArr: guarda um array de objetos com o 
		 * o nome e o valor de cada campo, logo é só seguir
		 * a sequencia dos campos.
		 */

		$.ajax({
		    url: url,
		    context: document.body,
		    type: type,
		    data: data,
		    success: function(id){
			if(id > 0){ //if action save
			    if(action == "inserir"){
				var name	= dataArr[0].value,
				    linkUrl = baseUrl+__controller+"/view/"+id,
				    link	= "<a href='"+linkUrl+"'>"+name+"</a>",
				    html	= "<tr><td>"+id+"</td><td>"+link+"</td></tr>"
				    ;

				$lista.find("tbody").prepend(html).end();
				alert(msgInsertTrue);
			    }
			    else if(action == "alterar"){
				alert(msgUpdateTrue);
			    }
			}
			else {
			    if(action == "inserir"){
				alert(msgInsertFalse);
			    }
			    else if(action == "alterar"){
				alert(msgUpdateFalse);
			    }
			}
		    }
		});
		e.preventDefault();
		return false;
	    }); //fim form submit
	    
	});//fim document ready
    }//fim complete
});//fim yepnope

var getIdUrl = function($a){
    var text = $a.text(),
	href = $a.attr("href"),
	hrefArr = href.split("/");
    return hrefArr[hrefArr.length-1];    
}
var createInput = function(type, name, value){    
    return "<input type='"+type+"' name='"+name+"' value='"+value+"' id='id_hidden' />";
}    
var sendData = function(action){
    
}