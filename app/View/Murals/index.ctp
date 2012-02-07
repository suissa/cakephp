<?php
//var_dump($results); 
echo $this->Html->link('Adicionar comentário', 'add');

?>
<br>
<br>
<?php foreach($results as $result): ?>

	id: <?php echo $result['Mural']['_id']; ?> [<?php echo $this->Html->link('edit','edit/'.$result['Mural']['_id']); ?>] [<?php echo $this->Html->link('delete','delete/'.$result['Mural']['_id']); ?>]<br>
	titulo: <?php echo $result['Mural']['Post']['titulo']; ?><br>
	texto: <?php echo $result['Mural']['Post']['texto']; ?><br>
	autor: <?php echo $result['Mural']['Post']['nome']; ?><br>

<hr>
<?php endforeach; ?>
