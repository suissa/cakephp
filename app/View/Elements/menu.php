<ul id="menu_topo">
<?php
$menuArr = array("posts", "users", "profiles");
foreach($menuArr as $v){
?>
    <li><?php echo $this->Html->link(ucwords($v), array("controller" => $v, "action" => "index")); ?></li>

<?php } ?>
</ul>