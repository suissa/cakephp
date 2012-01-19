<?php
    $__listEditName = "alterar";
    $__listDeleteName = "deletar";
if(isset($results)): 
?>
<table id="listagem">
	<tr>
		<th>Id</th>
		<th>Profile</th>
		<th>Alterar</th>
		<th>Deletar</th>
	</tr>
	<tbody>
	<?php foreach ($results as $result):
	    $__listId = $result['Profile']['id'];
	    $__listName = $result['Profile']['name']; ?>
	<tr>
		<td><?php echo $__listId; ?></td>
		<td>
		    <?php echo $this->Html->link($__listName, array('controller' => $__controller, 'action' => $__actionView, $result['Profile']['id'])); ?>
		</td>
		<td>
		    <?php echo $this->Html->link($__listEditName, array('controller' => $__controller, 'action' => $__actionEdit, $result['Profile']['id'])); ?>
		</td>
		<td>
		    <?php echo $this->Html->link($__listDeleteName, array('controller' => $__controller, 'action' => $__actionDelete, $result['Profile']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php endif; ?>