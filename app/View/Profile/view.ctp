<?php 

$__controller = "profile";
$__action = "save";

if(isset($result)):
    echo "<h1>".$result['Profile']['id']." - ".$result['Profile']['name']."</h1>";
endif; ?>

<form action="<?php echo $this->Html->url(array('controller' => '$__controller','action' => $__action), true);?>" method="post" class="form_cadastro">
    
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

<?php if(isset($results)): ?>
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
<?php endif; ?>