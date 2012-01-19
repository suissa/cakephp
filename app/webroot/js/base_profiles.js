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
	    //Variáveis do ambiente
		//Variáveis de elementos
	    var  $form = $("#form_cadastro"),
		$listagem = $("#listagem"),
		//Variáveis de tipos
		typeSubmit = "[type='submit']",
		typeReset = "[type='reset']",
		//Variaveis com os nomes dos elementos do form
		nameName = "[name='name']",
		nameID = "[name='id']"
		;
	    
	    //Método para limpar o form e retirar o input hidden ID
	    $form.on('click', typeReset, function(e){
		var newButtonVal = "Inserir";
		//Removo o input hidden ID
		$(nameID).remove();
		//Retorno o valor do botão para Inserir
		$(typeSubmit).val(newButtonVal);
	    });
	    //Método para inserir registros
	    $form.on('click', typeSubmit, function(e){		
		var form = $(this).parents("form").attr("id");
		var $form = $("#"+form);
		var action = $form.attr("action");
		var method = $form.attr("method").toLowerCase();
		var data = $form.serialize(); 
		var dataArr = $form.serializeArray(); 
		var msgInsertTrue = "Profile inserido com sucesso!";
		var msgInsertFalse = "Profile não pode ser inserido com sucesso!";

		var $lista = $("#listagem");
	//		console.log();
	//		e.preventDefault();
	//		return false;
	//		if(method == 'post'){
	//		    var name = $("[name='name']").val();
	//		}
		/*
		 * Caso deseje mostrar os dados sem consulta-los,
		 * guarde em vars seus valores que foram enviados.
		 * 
		 * var dataArr: guarda um array de objetos com o 
		 * o nome e o valor de cada campo, logo é só seguir
		 * a sequencia dos campos.
		 */

		$.ajax({
		    url: action,
		    context: document.body,
		    type: method,
		    data: data,
		    success: function(id){
			if(id > 0){

			    var  name = dataArr[0].value,
				linkUrl = baseUrl+__controller+"/view/"+id,
				link = "<a href='"+linkUrl+"'>"+name+"</a>",
				html = "<tr><td>"+id+"</td><td>"+link+"</td></tr>"
				;
				
			    $lista.find("tbody").prepend(html).end();
			    alert(msgInsertTrue);
			    console.log(html);
			}
			else {
			    alert(msgInsertFalse);
			}
		    }
		});
		e.preventDefault();
		return false;
	    }); //fim form submit

	    //Método para buscar um registro
	    $listagem.on('click', '.registry', function(e){
		var $a = $(this);
		var $button = $form.find(typeSubmit).end();

		var newButtonVal = "Salvar";
		//var oldButtonVal = $button.val();
		
		var id = getIdUrl(href);

		var inputID = createInput("hidden", "id", id);
		//var inputHidden = createInput("hidden", "id", );
	//		var href = $a.attr("href");
	//		$button.val(newButtonVal);
		$form.find(nameName).val(text);
		$form.find(typeSubmit).val(newButtonVal);
		$form.append(inputID);

		e.preventDefault();
		return false;
	    });//fim #listagem a
	    
	    //Método que gerencia as ações nos links
	    $listagem.on('click', '.action', function(e){
		e.preventDefault();
		
		var action = $(this).text().toLowerCase(),
		    $a = $(this),
		    id = getIdUrl($a),
		    inputID = createInput("hidden", "id", id),
		    text = $a.parents("tr").find(".registry").text();
		;
		switch(action){
		    case "alterar":	
			var newButtonVal = "Salvar";	
			$form.find(nameName).val(text);
			$form.find(typeSubmit).val(newButtonVal);
			$form.append(inputID);

			break;
		    case "deletar":
			alert();
			break;
		
		}
		
		e.preventDefault();
		return false;
	    });//fim click .action
	});//fim document ready
    }//fim complete
});//fim yepnope

var getIdUrl = function($a){
    var text = $a.text(),
	href = $a.attr("href"),
	hrefArr = href.split("/");
    return hrefArr[hrefArr.length-1];    
}
var createInput= function(type, name, value){    
    return "<input type='"+type+"' name='"+name+"' value='"+value+"' id='id_hidden' />";
}    