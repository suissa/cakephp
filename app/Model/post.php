<?php
class Post extends AppModel
{
	var $name = 'Post';

	var $validate = array(
		'titulo' => array(
			'rule' => 'notEmpty'
		),
		'texto' => array(
			'rule' => 'notEmpty'
		)
	);
}
?>