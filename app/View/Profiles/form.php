<?php
    $__action = "save";
?>
<form action="<?php echo $this->Html->url(array('controller' => $__controller,'action' => $__action), true);?>" method="post" id="form_cadastro">
    <input type="hidden" name="id" value="" />
	<ul>
	    <li>
		<label for="name">Nome:</label>
		<input type="text" name="name" value="" />
	    </li>
	    <li>
		<input type="reset" value="Limpar" />
		<input type="submit" value="Inserir" />
	    </li>
	    
	</ul>
</form>