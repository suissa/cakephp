<?php echo $this->Html->link('Adicionar comentário', 'add'); ?>
<br>
<br>
<?php foreach($results as $result): ?>

	id: <?php echo $result['Post']['_id']; ?> [<?php echo $this->Html->link('edit','edit/'.$result['Post']['_id']); ?>] [<?php echo $this->Html->link('delete','delete/'.$result['Post']['_id']); ?>]<br>
	titulo: <?php echo $result['Post']['titulo']; ?><br>
	texto: <?php echo $result['Post']['texto']; ?><br>
	autor: <?php echo $result['Post']['autor']; ?><br>

<hr>
<?php endforeach; ?>
