<?php 

echo $this->Html->script('yepnope.js');

?>
<script type="text/javascript"> 
yepnope({
    load: '//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
    callback: function (url, result, key) {
	if (!window.jQuery) yepnope(<?php echo JS; ?>'jquery.min.js');

    },
    complete: function() {
	$ = jQuery;
	//Coloque seu code jQuery aqui!!!!
	$(document).ready(function() {
	    alert('Holy moda focas ass');
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



<?php 

//$this->extend('form.ctp');

if(isset($results)): ?>
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