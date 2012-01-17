<?php ?>
<h1>Profiles</h1>


<form action="./save/" method="post" id="form_cadastro">
    
	<ul>
	    <li>
		<label for="name">Nome:</label>
		<input type="" name="name" />
	    </li>
	    <li>
		<input type="submit" value="enviar" />
	    </li>
	    
	</ul>
</form>

<table>
	<tr>
		<th>Id</th>
		<th>Profile</th>
	</tr>

	<?php foreach ($results as $result): ?>
	<tr>
		<td><?php echo $result['Profile']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($result['Profile']['name'], array('controller' => 'profile', 'action' => 'view', $result['Profile']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>
