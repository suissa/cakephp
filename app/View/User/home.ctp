<?php
if( isset($current_user) ) { ?>

    <h1>Welcome <?php echo $current_user["login"]; ?></h1>
    <p>Você está logado!</p>
    <?php debug($current_user) ?>
    <p><?php echo $this->Html->link("Logout",array('controller'=>'sessions','action'=>'destroy')); ?></a></p>

<?php } else { ?>

    <h1>Bem-vindo!</h1>
    <p>Click <?php echo $this->Html->link('here',array('controller'=>'sessions','action'=>'create')); ?> to login</p>
    <p>Or <?php echo $this->Html->link('here',array('controller'=>'user','action'=>'signup')); ?> to sign up</p>

<?php } ?>