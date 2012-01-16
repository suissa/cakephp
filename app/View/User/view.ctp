<?php 

$__controller = "user";
$__action = "save";

if(isset($result)):
    echo "<h1>".$result['User']['id']." - ".$result['User']['login']."</h1>";
endif; ?>

<form action="<?php echo $this->Html->url(array('controller' => '$__controller','action' => $__action), true);?>" method="post" class="form_cadastro">
    
	<ul>
	    <li>
		<label for="name">Login:</label>
		<input type="" name="login" />
	    </li>
	    <li>
		<label for="name">Email:</label>
		<input type="" name="email" />
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
		<th>User</th>
	</tr>

	<?php foreach ($results as $result): ?>
	<tr>
		<td><?php echo $result['User']['id']; ?></td>
		<td>
			<?php echo $this->Html->link($result['User']['login'], array('controller' => 'user', 'action' => 'view', $result['User']['id'])); ?>
		</td>
		<td><?php echo $result['User']['email']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>
<?php endif; ?>