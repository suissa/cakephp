<?php 

echo $this->Html->script('yepnope.js');

?>
<script type="text/javascript"> 
var baseUrl = '<?php echo Router::url('/', true) ?>';
yepnope({
    load: '//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
    callback: function (url, result, key) {
	if (!window.jQuery){ 
	    yepnope(baseUrl+'js/jquery.min.js');
	}

    },
    complete: function() {
	$ = jQuery;
	//Coloque seu code jQuery aqui!!!!
	$(document).ready(function() {
	    $("[type='button']").click(function(e){
		
		var form = $(this).parents("form").attr("id");
		var $form = $("#"+form);
		var action = $form.attr("action");
		var method = $form.attr("method").toLowerCase();
		var data = $form.serialize(); 
		var dataArr = $form.serializeArray(); 
		
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
				
			    var name = dataArr[0].value;
			    var html = "<tr><td>"+id+"</td><td>"+name+"</td></tr>";
			    $lista.children("tbody").prepend(html);
			    console.log(id);
			}
			else {
			    alert("Zicou!");
			}
		    }
		});
		e.preventDefault();
		return false;
	    });
	});
    }
});   
    
</script>
<?php 
$__controller = "profile";
$__action = "save";

if(isset($result)):
    echo "<h1>".$result['Profile']['id']." - ".$result['Profile']['name']."</h1>";
endif; ?>


<form action="<?php echo $this->Html->url(array('controller' => $__controller,'action' => $__action), true);?>" method="post" id="form_cadastro">
    
	<ul>
	    <li>
		<label for="name">Nome:</label>
		<input type="text" name="name" />
	    </li>
	    <li>
		<input type="button" value="enviar" />
	    </li>
	    
	</ul>
</form>

<?php 
//$this->extend('form.ctp');
//echo $this->element('form_cadastro_profile');


if(isset($results)): ?>
<table id="listagem">
	<tr>
		<th>Id</th>
		<th>Profile</th>
	</tr>
	<tbody id="listagem">
	<?php foreach ($results as $result): ?>
	<tr>
		<td><?php echo $result['Profile']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($result['Profile']['name'], array('controller' => 'profile', 'action' => 'view', $result['Profile']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>