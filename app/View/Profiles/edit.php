<?php 
//Edit depende da var $result
if(isset($result)){
include "config.php";
//    $__controller = "profiles";
//    $__model = key($result);
    
//    Inserção do yepnope para carregar js e css assincronamente
    echo $this->Html->script('yepnope.js');
?>
<script type="text/javascript"> 
//variavel que armazena o caminho até o projeto
var baseUrl = '<?php echo Router::url('/', true) ?>';
var __controller = "profiles";
//
//yepnope({
//    load: '//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
//    callback: function (url, result, key) {
//	if (!window.jQuery){ 
//	    yepnope(baseUrl+'js/jquery.min.js');
//	}
//    },
//    complete: function() {
//	$ = jQuery;
//	//Coloque seu code jQuery aqui!!!!
//	$(document).ready(function() {
//	    //Variáveis do ambiente
//		//Variáveis de elementos
//	    var  $form = $("#form_cadastro"),
//		$listagem = $("#listagem"),
//		//Variáveis de tipos
//		typeSubmit = "[type='submit']",
//		typeReset = "[type='reset']",
//		//Variaveis com os nomes dos elementos do form
//		nameName = "[name='name']",
//		nameID = "[name='id']"
//		;
//	    
//	    //Método para limpar o form e retirar o input hidden ID
//	    $form.on('click', typeReset, function(e){
//		var newButtonVal = "Inserir";
//		//Removo o input hidden ID
//		$(nameID).remove();
//		//Retorno o valor do botão para Inserir
//		$(typeSubmit).val(newButtonVal);
//	    });
//	    //Método para inserir registros
//	    $form.on('click', typeSubmit, function(e){		
//		var form = $(this).parents("form").attr("id");
//		var $form = $("#"+form);
//		var action = $form.attr("action");
//		var method = $form.attr("method").toLowerCase();
//		var data = $form.serialize(); 
//		var dataArr = $form.serializeArray(); 
//		var msgInsertTrue = "Profile inserido com sucesso!";
//		var msgInsertFalse = "Profile não pode ser inserido com sucesso!";
//
//		var $lista = $("#listagem");
//	//		console.log();
//	//		e.preventDefault();
//	//		return false;
//	//		if(method == 'post'){
//	//		    var name = $("[name='name']").val();
//	//		}
//		/*
//		 * Caso deseje mostrar os dados sem consulta-los,
//		 * guarde em vars seus valores que foram enviados.
//		 * 
//		 * var dataArr: guarda um array de objetos com o 
//		 * o nome e o valor de cada campo, logo é só seguir
//		 * a sequencia dos campos.
//		 */
//
//		$.ajax({
//		    url: action,
//		    context: document.body,
//		    type: method,
//		    data: data,
//		    success: function(id){
//			if(id > 0){
//
//			    var  name = dataArr[0].value,
//				linkUrl = baseUrl+__controller+"/view/"+id,
//				link = "<a href='"+linkUrl+"'>"+name+"</a>",
//				html = "<tr><td>"+id+"</td><td>"+link+"</td></tr>"
//				;
//				
//			    $lista.find("tbody").prepend(html).end();
//			    alert(msgInsertTrue);
//			    console.log(html);
//			}
//			else {
//			    alert(msgInsertFalse);
//			}
//		    }
//		});
//		e.preventDefault();
//		return false;
//	    }); //fim form submit
//
//	    //Método para buscar um registro
//	    $listagem.on('click', 'a', function(e){
//		var $a = $(this);
//		var $button = $form.find(typeSubmit).end();
//
//		var newButtonVal = "Salvar";
//		//var oldButtonVal = $button.val();
//
//		var text = $a.text();
//		var href = $a.attr("href");
//		var hrefArr = href.split("/");
//		var id = hrefArr[hrefArr.length-1];
//
//		var inputID = createInput("hidden", "id", id);
//		//var inputHidden = createInput("hidden", "id", );
//	//		var href = $a.attr("href");
//	//		$button.val(newButtonVal);
//		$form.find(nameName).val(text);
//		$form.find(typeSubmit).val(newButtonVal);
//		$form.append(inputID);
//
//		e.preventDefault();
//		return false;
//	    });//fim #listagem a
//	});//fim document ready
//    }//fim complete
//});//fim yepnope


var createInput= function(type, name, value){    
    return "<input type='"+type+"' name='"+name+"' value='"+value+"' id='id_hidden' />";
}    
</script>
<?php 
echo $this->element("menu.php");
$__action = "save";
?>


<form action="<?php echo $this->Html->url(array('controller' => $__controller,'action' => $__action), true);?>" method="post" id="form_cadastro">
    <input type="hidden" name="id" value="<?php echo $result[$__model]["id"];  ?>" />
	<ul>
	    <li>
		<label for="name">Nome:</label>
		<input type="text" name="name" value="<?php echo $result[$__model]["name"];  ?>" />
	    </li>
	    <li>
		<input type="reset" value="Limpar" />
		<input type="submit" value="Salvar" />
	    </li>
	    
	</ul>
</form>

<table id="listagem">
    <tr>
	<th>Id</th>
	<th>Profile</th>
	<th>Alterar</th>
	<th>Deletar</th>
    </tr>
    <tbody>
    <tr>
	<td><?php echo $result[$__model]['id']; ?></td>
	<td>
	    <?php echo $this->Html->link($result[$__model]['name'], array('controller' => $__controller, 'action' => $__actionView, $result[$__model]['id'])); ?>
	</td>
	<td>
	    <?php echo $this->Html->link("alterar", array('controller' => $__controller, 'action' => $__actionEdit, $result[$__model]['id'])); ?>
	</td>
	<td>
	    <?php echo $this->Html->link("deletar", array('controller' => $__controller, 'action' => $__actionDelete, $result[$__model]['id']), null, 'Tem certeza disso?' ); ?>
	</td>
    </tr>
    </tbody>
</table>
<?php }//fim if result ?>