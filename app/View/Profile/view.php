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
	    $("[type='submit']").click(function(e){
		
		var action = $("#form_cadastro").attr("action");
		var method = $("#form_cadastro").attr("method").toLowerCase();
		var data = $(this).parents("form").serialize(); //para GET
		
		var $lista = $("#listagem");
		
		if(method == 'post'){
		    var name = $("[name='name']").val();
		}
		    
		$.ajax({
		    url: action,
		    context: document.body,
		    type: method,
		    data: data,
		    success: function(result){
			if(result == 1){
			    alert("YES");
			    var html = "<tr><td>ide</td><td>"+name+"</td></tr>";
			    $lista.children("tbody").prepend(html);
			    console.log($lista, html);
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
		<input type="submit" value="enviar" />
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